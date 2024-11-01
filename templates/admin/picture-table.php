<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// print_r($post);
?>

<div class="picture-table-wrap">
  <sp-picture-table v-if="storePicture.storePictureData.length > 0" :sp-data="storePicture.storePictureData"></sp-picture-table>
</div>
