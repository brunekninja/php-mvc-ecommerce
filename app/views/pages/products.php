<?php
/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 20/05/2017
 * Time: 18:23
 */

function libxml_display_error($error)
{
  $return = '<br/>';
  switch ($error->level) {
    case LIBXML_ERR_WARNING:
      $return .= ' Warning ' . $error->code;
      break;
    case LIBXML_ERR_ERROR:
      $return .= ' Error ' . $error->code;
      break;
    case LIBXML_ERR_FATAL:
      $return .= ' Fatal Error ' . $error->code;
      break;
  }

  $return .= trim($error->message);
  if ($error->file) {
    $return .= ' in ' . $error->file;
  }
  $return .= ' on line ' . $error->line;

  return $return;
}

function libxml_display_errors() {
  $errors = libxml_get_errors();
  foreach ($errors as $error) {
    print libxml_display_error($error);
  }
  libxml_clear_errors();
}

libxml_use_internal_errors(true);

$xml = new DOMDocument();
$xml->load('./ex_data/products.xml');

if (!$xml->schemaValidate('./ex_data/schemas/products.xsd')) {
  echo 'Errors';
  libxml_display_errors();
}
else {
  $xsl = new DOMDocument();
  $xsl->load('./ex_data/products.xsl');

  $transform = new XSLTProcessor();
  $transform->importStylesheet($xsl);

  echo $transform->transformToXml($xml);
}


