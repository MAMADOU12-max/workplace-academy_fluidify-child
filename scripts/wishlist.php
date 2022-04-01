<?php
require_once __DIR__.'/../../../../wp-load.php';

$validTypes = ['travel', 'journey', 'speaker'];

if(!is_user_logged_in())
{
    http_response_code(401);
    echo json_encode([
        'status' => http_response_code(),
        'message' => "Only logged in users can add something to their wishlist."
    ]);
    die();
}

if(!isset($_POST['post_id']) || !isset($_POST['type']))
{
    http_response_code(400);
    echo json_encode([
        'status' => http_response_code(),
        'message' => "Missing parameters: 'post_id' or 'type'"
    ]);
    die();
}

if(!in_array($_POST['type'], $validTypes))
{
    http_response_code(400);
    echo json_encode([
        'status' => http_response_code(),
        'message' => "Incorrect type given. The following types are allowed: ".ThemeValidTypesToArray($validTypes)
    ]);
    die();
}

$currentUser = wp_get_current_user();
if($currentUser->ID <= 0)
{
    http_response_code(401);
    echo json_encode([
        'status' => http_response_code(),
        'message' => "Invalid user detected."
    ]);
    die();
}

// Try to get the ID of an already existing wishlist entry
$existingEntry = ThemeGetExistingWishlistEntry($_POST['post_id'], $_POST['type'], $currentUser->ID);
if($existingEntry == null)
{
    // Insert a new row
    global $wpdb;
    $inserted = $wpdb->insert($wpdb->prefix.'wishlist', [
        'post_id' => $_POST['post_id'],
        'user_id' => $currentUser->ID,
        'type' => $_POST['type'],
        'status' => WISHLIST_STATUS_ACTIVE
    ]);

    if($inserted <= 0)
    {
        http_response_code(400);
        echo json_encode([
            'status' => http_response_code(),
            'message' => "Could not add the post to your wishlist."
        ]);
        die();
    }
    
    http_response_code(200);
    echo json_encode([
        'status' => http_response_code(),
        'message' => "Successfully added the post to your wishlist."
    ]);
    die();
}
else
{
    global $wpdb;
    $newStatus = WISHLIST_STATUS_ACTIVE;

    // Update the status
    if($existingEntry['status'] == WISHLIST_STATUS_ACTIVE)
        $newStatus = WISHLIST_STATUS_INACTIVE;

    $updated = $wpdb->update($wpdb->prefix.'wishlist', ['status' => $newStatus], ['ID' => $existingEntry['id']]);
    if($updated <= 0)
    {
        http_response_code(400);
        echo json_encode([
            'status' => http_response_code(),
            'message' => "Could not update the wishlist entry.",
            'status' => $newStatus
        ]);
        die();
    }
    
    http_response_code(200);
    echo json_encode([
        'status' => http_response_code(),
        'message' => "Successfully updated the wishlist entry.",
        'status' => $newStatus
    ]);
    die();
}

/*

    --- Utility ---

*/
function ThemeValidTypesToArray(array $types) : string
{
    $output = '';

    for($i = 0; $i < count($types); $i += 1)
    {
        if($i == 0)
        {
            $output .= $types[$i];
        }
        else
        {
            $output .= ', '.$types[$i];
        }
    }

    return $output;
}

function ThemeGetExistingWishlistEntry($postId, $type, $userId) : ?array
{
    global $wpdb;
    $wishListEntry = null;

    $query = "SELECT ID, status FROM `{$wpdb->prefix}wishlist` WHERE `post_id` = %s AND `user_id` = %s AND `type` = %s";
    $query = $wpdb->prepare($query, $postId, $userId, $type);
    $queryResult = $wpdb->get_results($query);

    if(count($queryResult) > 0)
    {
        $wishListEntry = [
            'id' => $queryResult[0]->ID,
            'status' => $queryResult[0]->status
        ];
    }

    return $wishListEntry;
}
