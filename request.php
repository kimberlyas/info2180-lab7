<?php
// For PHP 5 and up

# accept a term (keyword)
# respond with a value
$query = $_REQUEST['q'];
$all=$_REQUEST['all'];

$definition = [
    "definition" => "a statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "a place that sells alcholic beverages",
    "ajax" => "technique which involves the use of javascript and xml"
];

$examples = ["Example of a definition","Example goes here","Example goes here"];
$authors = ["- Mary Jones","- Arthur Wint","- Bob Sacamano"];

if($all==true and $query==null){
    header("Content-type: text/xml");
    $string='<entries>';
    foreach($definition as $key=>$value){
        $string.='<definition name=\''.$key.'\'>'.$value.'</definition>';
    }
     foreach($examples as $example){
        $string.='<example>'.$example.'</example>';
    }
     foreach($authors as $author){
        $string.='<author>'.$author.'</author>';
    }
    $string.='</entries>';
    $xml=new SimpleXMLElement($string);
    echo $xml->asXML();
}
else{

print $query;
print "<br>";
print($definition[$query]);
}

?>
