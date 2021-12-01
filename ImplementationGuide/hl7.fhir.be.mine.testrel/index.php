<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://costateixeira.github.io/testrel/0.0.14/ImplementationGuide-hl7.fhir.be.mine.testrel.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://costateixeira.github.io/testrel/0.0.14/ImplementationGuide-hl7.fhir.be.mine.testrel.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://costateixeira.github.io/testrel/0.0.14/ImplementationGuide-hl7.fhir.be.mine.testrel.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://costateixeira.github.io/testrel/0.0.14/ImplementationGuide-hl7.fhir.be.mine.testrel.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://costateixeira.github.io/testrel/0.0.14/ImplementationGuide-hl7.fhir.be.mine.testrel.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://costateixeira.github.io/testrel/0.0.14/ImplementationGuide-hl7.fhir.be.mine.testrel.html');
else 
  Redirect('https://costateixeira.github.io/testrel/0.0.14/ImplementationGuide-hl7.fhir.be.mine.testrel.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
