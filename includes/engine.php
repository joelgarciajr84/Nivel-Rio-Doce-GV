<?php
function PegaNivelRioDoceGV($url = "http://saaegoval.com.br/custom/niv_rio_vis.aspx"){
  
  $html = file_get_contents($url);
  $dom = new DOMDocument('1.0');
  $dom->loadHTML($html);

  $txNivel = $dom->getElementById('txNivel');
  $txData = $dom->getElementById('txData');
  $txHora = $dom->getElementById('txHora');

  $NivelDoRioDoceGV = new StdClass;

  $NivelDoRioDoceGV->nivel = $txNivel->C14N();
  $NivelDoRioDoceGV->data = $txData->C14N();
  $NivelDoRioDoceGV->hora = $txHora->C14N();

  return $NivelDoRioDoceGV;
}
