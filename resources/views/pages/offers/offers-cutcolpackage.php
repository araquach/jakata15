<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Hairdressing Offers';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = ""; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/.jpg" ; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/.jpg" ; ?>

<section id="offers">

	<section id="offer1">
	  <h2>Senior Stylist Colour &amp; Cut Package</h2>
	  <p>for just &pound;60<br>with any of our Senior Stylists</p>
	    <small><time datetime="2013-08-30">until 30/08/13</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer2">
	  <h2>Stylist Colour &amp; Cut Package</h2>
	  <p>for just &pound;40<br>with any of our Stylists</p>
	    <small><time datetime="2013-08-30">until 30/08/13</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>

</section> <!--end #offers-->
