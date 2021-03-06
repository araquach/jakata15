<?php
/* @var $this SurveyController */
/* @var $model SurveyMale */
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "The Great Jakata Autumn Giveaway"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Wouldn't it be great to have some free pampering or maybe get some of the latest hair products handed to you for free! Over the next couple of months we're going to be giving away 100's of pounds worth of hair products and services that YOU can get your hands on!"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/survey/autumn_meta.jpg"; ?>

<div id="survey">
<div id="survey_img"></div>
<div id="survey_copy">

<h1>The Great Jakata <br> Autumn Giveaway</h1>

<p>This time of year we all need a bit of a pick-me-up, the cold weather is setting in fast and winter is just around the corner. Wouldn't it be great to have some free pampering or maybe get some of the latest hair products handed to you for free!</p>
<p><em>Over the next couple of months we're going to be giving away 100's of pounds worth of hair products and services that YOU can get your hands on!</em></p>

<ul>
	<li>FREE Cut &amp; Styles, FREE blowdry's, FREE Colours</li>
	<li>FREE Kebelo Treatments</li>
	<li>FREE Tigi and Schwarzkopf products</li>
	<li>FREE GHD's</li>
	<li>FREE Tangle Teezers</li>
	<li>FREE Product &amp; Service vouchers</li>
</ul>

<!--<p class="last"><strong>Just click the appropriate link below - fill in the short survey and you're guaranteed to win one of the prizes above!</strong></p>

<?php echo CHtml::link('Click Here to enter if you\'re a girl &gt;',array('surveyFemale/create')); ?>

<?php echo CHtml::link('Click Here to enter if you\'re a guy &gt;',array('surveyMale/create')); ?>-->

<p><strong>The Autumn Giveaway is now finished</strong></p>
<p>If you entered and still haven't heard back from us call the salon on 01925 242960</p>

<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
   'href' => 'http://www.jakatasalon.co.uk/giveaway', 
   'show_faces'=>true,
   'send' => true,
   'width' => '250px'
));  ?>	

</div> <!--survey_copy-->
</div> <!--survey-->