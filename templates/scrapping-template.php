<?php /** Template Name: scrapping */ ?>


<?php
include 'simple_html_dom.php';
$html_code=file_get_contents('https://www.smartwp.nl/nieuws/');
 $dom= new DomDocument();
 libxml_use_internal_errors(true);
 $datas=array();
 if (!empty($html_code))
 {
     $dom->loadHTML($html_code);
     $dom_path=new DOMXPath($dom);
     $query= '//div[@class="blog-item"]';
     $result=$dom_path->query($query);
     if (!is_null($result)) {
         foreach ($result as $key => $node) {
               $array_data=array();
                $array_data['title']=$node->getElementsByTagName('h2')->item(0)->nodeValue;
                $array_data['short_description']=$node->getElementsByTagName('p')->item(0)->nodeValue;
                $array_data['image']=$node->getElementsByTagName('img')->item(0)->getAttribute('src');
                $array_data['link']=$node->getElementsByTagName('a')->item(0)->getAttribute('href');
                $array_data['date']=$node->getElementsByTagName('time')->item(0)->nodeValue;
                if ( $node->getElementsByTagName('a')->item(3)->nodeValue != null)
                $array_data['theme']=$node->getElementsByTagName('a')->item(3)->nodeValue;
             else
                $array_data['theme']=$node->getElementsByTagName('a')->item(4)->nodeValue;
               $title=$node->getElementsByTagName('h2')->item(0)->nodeValue;
               $link='https://www.smartwp.nl'.$node->getElementsByTagName('a')->item(0)->getAttribute('href');
               $html_code_content=file_get_contents($link);
               $dom_content= new DomDocument();
               libxml_use_internal_errors(true);
                if (!empty($html_code_content))
                {
                     $dom_content->loadHTML($html_code_content);
                     libxml_clear_errors();
                     $dom_path_content=new DOMXPath($dom_content);
                     $query_content= '//div[@class="text"]';
                     $result_content=$dom_path_content->query($query_content);
                     if (!is_null($result_content)) {
                        $array_data['content']=$result_content->item(0)->nodeValue;
                          }
                }
                array_push($datas,$array_data);    
         }
         var_dump($datas);
        }
    }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livelearn_db";
$dbTable = "wpe7_databank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
foreach ($datas as $key => $article) {
    
    $sql="SELECT * FROM `wpe7_databank` WHERE `wpe7_databank`.`titel`='$article[title]' AND `wpe7_databank`.`type`='$article[type]'";
    // if ($conn->query($sql)!=TRUE || $conn->query( "SELECT COUNT(*) FROM `wpe7_databank`")==0)
    // {    
        $sql=" INSERT INTO `wpe7_databank` ( `titel`, `type`, `video(s)`, `short_description`, `long_description`, `for_who`, `agenda`, `results`, `duration`, `prijs`, `prijs_vat`, `image_xml`, `onderwerpen`, `date_multiple`, `location`, `level`, `language`, `course_id`, `author_id`, `status`, `state`, `optie`) VALUES ( '$article[title]', 'Artikel', NULL, '$article[short_description]', '$article[content]', NULL, '$article[date]', NULL, NULL, 0, NULL,'$article[image]', '', NULL, NULL, '', '', 2070, 0, 'intern', 0, NULL)";
        if ($conn->query($sql) === TRUE) {
               echo "New record created successfully";
             } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
             }

    //}
    
}
$conn->close();

//"INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }


?>
    
        