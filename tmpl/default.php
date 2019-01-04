<?php
/**
 * @package	mod_eac_waktu_solat
 * @author	Ammar Idris
 * @copyright	Copyright (C) 2016 Ammar Idris. All rights reserved.
 * @license	GNU General Public License version 2 or later.
 */

defined('_JEXEC') or die;
?>

<div class="ai-text-center">
<span class="ai-oc" onclick="window.open('http://www.e-solat.gov.my/')" title="Klik untuk lokasi lain"><?php echo $zone_desc;?></span><br />
<?php echo $hari_hijri."&nbsp;".$bulan_hijri."&nbsp;".$tahun_hijri; ?>

<hr />

<?php if($style_paparan==1) { ?>
<div class="ai-grid ai-text-center">
<?php } ?>

<?php
if($imsak) { $ii=0; } else { $ii=1; }
if($syuruk) { $is=22; } else { $is=2; }

for ($i=$ii; $i<=6; $i++) { if($i!=$is) {
$masa=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
$tajuk=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
?>

<?php if($style_paparan==1) { ?>
<div class="ai-width-1-5">
  <strong><?php echo date('H:i', strtotime($masa)); ?></strong><br />
  <small><?php echo $tajuk; ?></small>
</div>

<?php } ?>

<?php if($style_paparan==2) { ?>
<div class="ai-grid">
  <div class="ai-width-1-2">
    <small><?php echo $tajuk; ?></small>
  </div>
  <div class="ai-width-1-2 ai-text-right">
    <strong><?php echo date('H:i', strtotime($masa)); ?></strong>
  </div>
</div>
<?php } ?>

<?php }} ?>

<?php if($style_paparan==1) { ?>
</div>
<?php } ?>

<?php if(!empty($text_note)) { echo "<hr />".$text_note; } ?>
</div>
