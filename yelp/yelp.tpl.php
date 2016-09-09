<?php
/**
 * @file
 * This module defines yelp functions for resource locator.
 */
if(isset($variables['a']))
{
?>
	<div class="views-field views-field-body"><p>Sorry! No result found in this location. Please change location to get more information.</p></div>
<?php
}
$businesses = isset($variables['businesses']) ? $variables['businesses'] : '';
?>
<div class="page-books">
  <div class="view view-books view-id-books view-display-id-page view-dom-id-481501de85b709b10fc4db15ae3ee55c">
    <div class="view-content">

      <?php
		if(!empty($variables['businesses'])) :
          foreach ($businesses as $business) : ?>
			<?php
				$business_url              = isset($business->url) ? $business->url : '';
				$business_name             = isset($business->name) ? $business->name : '';
				$business_image_url        = isset($business->image_url) ? $business->image_url : '';
				$business_review_count     = isset($business->review_count) ? $business->review_count : '';
				$business_image_rating_url = isset($business->rating_img_url) ? $business->rating_img_url : '';
				$business_location_address = isset($business->location->display_address) ? $business->location->display_address : '';
				$business_phone            = isset($business->display_phone) ? $business->display_phone : '' ;
				$business_response_text	   = isset($business->snippet_text) ? $business->snippet_text : '';
			?>
            <div class="views-row views-row-1 views-row-odd views-row-first">
              <div class="views-field views-field-title">
                <span class="field-content"><a href="<?php echo $business_url; ?>"><?php echo $business_name; ?></a></span>
              </div>
              <div class="views-field views-field-field-thumbnail">
                <div class="field-content">
                  <a href="<?php echo $business_url; ?>"><img typeof="foaf:Image" src="<?php echo $business_image_url; ?>" width="66" height="100" alt=""></a>
                </div>
              </div>
              <div class="views-field views-field-field-link-to-amazon">
                <span class="views-label views-label-field-link-to-amazon">Review Count: </span>
                <div class="field-content"><?php echo $business_review_count; ?></div>
              </div>
              <div class="views-field views-field-field-price">
                <span class="views-label views-label-field-price">Rating: </span>
                <div class="field-content"><img typeof="foaf:Image" src="<?php echo $business_image_rating_url; ?>" alt=""></div>
              </div>
              <div class="views-field views-field-field-publisher">
                <span class="views-label views-label-field-publisher">Address: </span>
                <div class="field-content"><?php echo implode('<br/>', $business_location_address); ?></div>
              </div>
              <div class="views-field views-field-field-isbn">
                <span class="views-label views-label-field-isbn">Contact: </span>
                <div class="field-content"><?php echo $business_phone; ?> </div>
              </div>
              <div class="views-field views-field-body">
                <div class="field-content"><p><?php echo $business_response_text; ?><a href="<?php echo $business_url; ?>">More</a></p></div>
              </div>
            </div>
      <?php
          endforeach;
		  endif;
	  ?>
    </div>
  </div>
</div>
