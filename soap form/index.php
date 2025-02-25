<?php 
$soapUrl = "https://ws.campaigner.com/2013/01/campaignmanagement.asmx?op=ListCampaigns"; 
        $soapUser = "XYZ";  
        $soapPassword = "******";

      $xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
          <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
          xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                <soap:Body>
                  <ListCampaigns xmlns="https://ws.campaigner.com/2013/01">
                    <authentication>
                      <Username>&#39;.$soapUser.&#39;</Username>
                      <Password>&#39;.$soapPassword.&#39;</Password>
                    </authentication>
                    <dateTimeFilter>
                      <FromDate>2019-03-01</FromDate>
                      <ToDate>2019-04-26</ToDate>
                    </dateTimeFilter>
                  </ListCampaigns>
                </soap:Body>
              </soap:Envelope>';

          $headers = array(
                        "Content-type: text/xml;charset=\"utf-8\"",
                        "Accept: text/xml",
                        "Cache-Control: no-cache",
                        "Pragma: no-cache",
                        "SOAPAction: https://ws.campaigner.com/2013/01/ListCampaigns", 
                        "Content-length: ".strlen($xml_post_string),
                    ); //SOAPAction: your op URL

          $url = $soapUrl;

           // PHP cURL  for https connection with auth
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword);
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

       
            $response = curl_exec($ch); 
            curl_close($ch);

           echo $response;

            $response1 = str_replace("<soap:Body>","",$response);
            $response2 = str_replace("</soap:Body>","",$response1);

            $parser = simplexml_load_string($response2);
            // user $parser to get your data out of XML response and to display it.


