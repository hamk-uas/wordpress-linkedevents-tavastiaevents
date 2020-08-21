<?php
$result = "";

$result .= '<article>';
$language = $data->language;
$fieldConfig = $data->fieldConfig;
$fieldsToShow = [];
if (!empty($fieldConfig)) {
  $fieldsToShow = explode(',', $fieldConfig);
}
if (empty($language) || $language === "All languages") {
  $language = "fi";
}

$actionUrl = $_SERVER['REQUEST_URI'];

$page = strip_tags($_REQUEST["les-page"]);
$page = $page ? trim($page) : null;

$eventName = $event["name"][$language];
$eventLink = $event["externalLinks"][0]["link"];
$shortDescription = $event["shortDescription"][$language];
$description = $event["description"][$language];
$baseUrl = $actionUrl . (empty($_REQUEST) ? "?" : "&") . (empty($page) ? "les-page=" : "");
if ($page) {
  $baseUrl = substr($actionUrl, 0, -1);
}
$previousPage = $baseUrl . ($page - 1);
$nextPage = $baseUrl . ($page + 1);

if (!empty($eventName)) {
  if (empty($fieldsToShow)) {
    $result .= sprintf('<div><a href="%s">%s</a></div>', $eventLink, $eventName);
  } else {

    // $result .= sprintf('<table><tr>');
    // foreach($fieldsToShow as $field) {
    //   $result .= sprintf("<th>%s</th>", $field);
    // }
    // $result .= sprintf('</tr><tr>');
    // foreach($fieldsToShow as $field) {
    //   $result .= sprintf("<th>%s</th>", $event[$field][$language]);
    // }
    // $result .= sprintf('</tr></table>');

    $result .= sprintf('<ol>');
    foreach ($fieldsToShow as $field) {
      $result .= sprintf("<li>%s</li>", $event[$field][$language]);
    }
    $result .= sprintf('</ol>');
  }
}

if ($page > 1) {
  $result .= sprintf('<a href="%s"> &#10094; </a>', $previousPage);
}
$result .= sprintf('<a href="%s"> &#10095; </a>', $nextPage);

$result .= '</article>';

echo $result;
