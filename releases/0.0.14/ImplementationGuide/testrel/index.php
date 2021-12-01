<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://localhost/testrel/0.0.14/ImplementationGuide-testrel.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://localhost/testrel/0.0.14/ImplementationGuide-testrel.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://localhost/testrel/0.0.14/ImplementationGuide-testrel.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://localhost/testrel/0.0.14/ImplementationGuide-testrel.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://localhost/testrel/0.0.14/ImplementationGuide-testrel.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://localhost/testrel/0.0.14/ImplementationGuide-testrel.html');
else 
  Redirect('http://localhost/testrel/0.0.14/ImplementationGuide-testrel.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
