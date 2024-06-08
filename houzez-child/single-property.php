<?php
global $post, $loggedin_to_view, $ele_settings, $author_id, $property_features;

get_header();

if (houzez_check_is_elementor() && (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('single'))) {

  while (have_posts()) : the_post();

    the_content();

  endwhile;
} else {


  if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('single')) {

    if (have_posts()) : while (have_posts()) : the_post();

        $propID = get_the_ID();
        $property_type = houzez_taxonomy_simple('property_type');

        $listing_area_size = houzez_get_listing_area_size($propID);
        $listing_size_unit = houzez_get_listing_size_unit($propID);
        $listing_price     = get_post_meta($propID, 'fave_property_price', true);
        $listing_min_term     = get_post_meta($propID, 'fave_property_min_term', true);
        $listing_available_on     = get_post_meta($propID, 'fave_property_available_on', true);
        $listing_utilities     = get_post_meta($propID, 'fave_property_utilities', true);
        $listing_laundry     = get_post_meta($propID, 'fave_property_laundry', true);
        $listing_furniture     = get_post_meta($propID, 'fave_property_furniture', true);
        $listing_phone_no     = get_post_meta($propID, 'fave_property_phone_no', true);
        $listing_pet_friendly     = get_post_meta($propID, 'fave_property_pet_friendly', true);
        $listing_bath_type     = get_post_meta($propID, 'fave_property_bath_type', true);
        $listing_entrance_type     = get_post_meta($propID, 'fave_property_entrance_type', true);

        $additional_features = get_post_meta(get_the_ID(), 'additional_features', true);

        $property_features = wp_get_post_terms(get_the_ID(), 'property_feature', array("fields" => "all"));

        $google_map_address = houzez_get_listing_data('property_map_address');
        $google_map_address_url = "http://maps.google.com/?q=" . $google_map_address;
?>

        <section class="content-wrap property-wrap ss-property-detail">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8">
                <div class="property_details_wrap">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#propertyDetails" type="button" role="tab" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3721 16.7441H0.627907C0.281302 16.7441 0 17.0254 0 17.372C0 17.7187 0.281302 18 0.627907 18H17.3721C17.7187 18 18 17.7187 18 17.372C18 17.0254 17.7187 16.7441 17.3721 16.7441Z" fill="#606060" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M4.39476 18C4.04815 18 3.76685 17.7187 3.76685 17.3721V11.093C3.76685 10.7464 4.04815 10.4651 4.39476 10.4651H8.5808C8.92741 10.4651 9.20871 10.7464 9.20871 11.093V17.3721C9.20871 17.7187 8.92741 18 8.5808 18H10.6738C11.0204 18 11.3017 17.7187 11.3017 17.3721V0.627907C11.3017 0.281302 11.0204 0 10.6738 0H2.30174C1.95513 0 1.67383 0.281302 1.67383 0.627907V17.3721C1.67383 17.7187 1.95513 18 2.30174 18H4.39476ZM7.9529 11.7209V16.7442H5.02267V11.7209H7.9529ZM5.44127 8.58139V7.74419C5.44127 7.39758 5.15997 7.11628 4.81336 7.11628C4.46676 7.11628 4.18546 7.39758 4.18546 7.74419V8.58139C4.18546 8.928 4.46676 9.2093 4.81336 9.2093C5.15997 9.2093 5.44127 8.928 5.44127 8.58139ZM8.79011 8.58139V7.74419C8.79011 7.39758 8.5088 7.11628 8.1622 7.11628C7.81559 7.11628 7.53429 7.39758 7.53429 7.74419V8.58139C7.53429 8.928 7.81559 9.2093 8.1622 9.2093C8.5088 9.2093 8.79011 8.928 8.79011 8.58139ZM8.79011 4.39535V3.55814C8.79011 3.21153 8.5088 2.93023 8.1622 2.93023C7.81559 2.93023 7.53429 3.21153 7.53429 3.55814V4.39535C7.53429 4.74195 7.81559 5.02326 8.1622 5.02326C8.5088 5.02326 8.79011 4.74195 8.79011 4.39535ZM5.44127 4.39535V3.55814C5.44127 3.21153 5.15997 2.93023 4.81336 2.93023C4.46676 2.93023 4.18546 3.21153 4.18546 3.55814V4.39535C4.18546 4.74195 4.46676 5.02326 4.81336 5.02326C5.15997 5.02326 5.44127 4.74195 5.44127 4.39535Z" fill="#606060" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1387 3.34863H15.6968C16.0434 3.34863 16.3247 3.62994 16.3247 3.97654V17.3719C16.3247 17.7185 16.0434 17.9998 15.6968 17.9998H11.998C12.0885 17.8097 12.1387 17.5963 12.1387 17.3719V3.34863ZM13.3945 11.0928V11.93C13.3945 12.2766 13.6758 12.5579 14.0224 12.5579C14.369 12.5579 14.6503 12.2766 14.6503 11.93V11.0928C14.6503 10.7462 14.369 10.4649 14.0224 10.4649C13.6758 10.4649 13.3945 10.7462 13.3945 11.0928ZM14.6503 7.74398V6.90677C14.6503 6.56017 14.369 6.27886 14.0224 6.27886C13.6758 6.27886 13.3945 6.56017 13.3945 6.90677V7.74398C13.3945 8.09059 13.6758 8.37189 14.0224 8.37189C14.369 8.37189 14.6503 8.09059 14.6503 7.74398Z" fill="#606060" />
                        </svg>
                        <?php esc_html_e('Property Detail', 'tjcore'); ?>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#propertyMap" type="button" role="tab" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.07947 9.56453H7.82464V7.76137C7.82464 7.64537 7.72974 7.55047 7.61374 7.55047H5.66295C5.54696 7.55047 5.45206 7.64537 5.45206 7.76137V9.56453H4.19722C4.08123 9.56453 3.98633 9.46963 3.98633 9.35363V6.95996C4.0496 6.98105 4.12341 6.9916 4.19722 6.9916H9.07947C9.15329 6.9916 9.2271 6.98105 9.29037 6.95996V9.35363C9.29037 9.46963 9.19547 9.56453 9.07947 9.56453ZM7.40285 9.56453H5.87385V7.97226H7.40285V9.56453Z" fill="#606060" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.0791 6.56976H4.19686C4.00705 6.56976 3.91215 6.34832 4.04923 6.21123L6.47454 3.78593C6.55889 3.70157 6.68543 3.70157 6.76979 3.78593L9.20564 6.19014C9.3849 6.34832 9.25837 6.56976 9.0791 6.56976Z" fill="#606060" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.63269 16.3761C6.57996 16.3761 6.5167 16.3445 6.48506 16.3023C3.9754 13.5395 0 10.3445 0 6.64323C0 2.97364 2.97364 0 6.63269 0C10.3023 0 13.2759 2.97364 13.2759 6.64323C13.2759 10.3445 9.30053 13.529 6.79086 16.3023C6.74868 16.3445 6.69596 16.3761 6.63269 16.3761ZM6.63269 11.6837C3.8594 11.6837 1.59227 9.42707 1.59227 6.64323C1.59227 3.8594 3.8594 1.59227 6.63269 1.59227C9.41652 1.59227 11.6837 3.8594 11.6837 6.64323C11.6837 9.42707 9.41652 11.6837 6.63269 11.6837Z" fill="#606060" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.63362 17.9997C3.79707 17.9997 0.78125 17.3565 0.78125 16.1649C0.78125 15.2686 2.43679 14.7308 4.15559 14.4883C4.87264 15.2264 5.5686 15.9224 6.16965 16.5867C6.28564 16.7132 6.45436 16.7976 6.63362 16.7976C6.81288 16.7976 6.9816 16.7132 7.10814 16.5867C7.69865 15.9224 8.40515 15.2264 9.1222 14.4883C10.841 14.7308 12.4965 15.2686 12.4965 16.1649C12.486 17.3565 9.47018 17.9997 6.63362 17.9997Z" fill="#606060" />
                        </svg>
                        <?php esc_html_e('Property Location', 'tjcore'); ?>
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="propertyDetails" role="tabpanel">

                      <div class="property_details-content">
                        <div class="row property_details_top">
                          <div class="col-lg-7 col-md-6">
                            <div class="property_details_top_gallery">
                              <?php get_template_part('property-details/partials/gallery'); ?>

                              <?php

                              $key = '';
                              $userID      =   get_current_user_id();
                              $fav_option = 'houzez_favorites-' . $userID;
                              $fav_option = get_option($fav_option);
                              if (!empty($fav_option)) {
                                $key = array_search($post->ID, $fav_option);
                              }

                              $print_class = '';
                              if ($loggedin_to_view == 1 && !is_user_logged_in()) {
                                $print_class = 'houzez-hidden';
                              }

                              $icon = '';
                              if ($key != false || $key != '') {
                                $icon = 'text-danger';
                              }
                              ?>
                              <ul class="item-tools">

                                <?php if (houzez_option('prop_detail_favorite') != 0) { ?>
                                  <li class="item-tool houzez-favorite">
                                    <span class="add-favorite-js item-tool-favorite" data-listid="<?php echo intval($post->ID) ?>">
                                      <i class="stock far fa-heart <?php echo esc_attr($icon); ?>"></i>
                                      <i class="fill fas fa-heart <?php echo esc_attr($icon); ?>"></i>
                                    </span><!-- item-tool-favorite -->
                                  </li><!-- item-tool -->
                                <?php } ?>

                              </ul><!-- item-tools -->
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-6">
                            <div class="property_details_top_content">
                              <?php get_template_part('property-details/partials/title'); ?>
                              <ul class="item-type-wrap">
                                <?php get_template_part('template-parts/listing/partials/type'); ?>
                              </ul>

                              <!-- review -->
                              <?php
                              $num_of_review = houzez_option('num_of_review', 5);

                              if (is_singular('property')) {
                                $meta_key = 'review_property_id';
                                $meta_value = get_the_ID();
                              } elseif (is_singular('houzez_agent')) {
                                $meta_key = 'review_agent_id';
                                $meta_value = get_the_ID();
                              } elseif (is_singular('houzez_agency')) {
                                $meta_key = 'review_agency_id';
                                $meta_value = get_the_ID();
                              } elseif (is_author()) {
                                $meta_key = 'review_author_id';
                                $meta_value = $author_id;
                              }

                              $args = array(
                                'post_type' => 'houzez_reviews',
                                'meta_key' => $meta_key,
                                'meta_value' => $meta_value,
                                'posts_per_page' => $num_of_review,
                                'post_status' => 'publish',
                              );
                              $review_qry = new WP_Query($args);

                              $total_review = $review_qry->found_posts;

                              $total_pages = $review_qry->max_num_pages;

                              if ($total_review > 1) {
                                $review_label = esc_html__('Reviews', 'houzez');
                              } else {
                                $review_label = esc_html__('Review', 'houzez');
                              }

                              $total_ratings = get_post_meta(get_the_ID(), 'houzez_total_rating', true);
                              ?>

                              <div class="property-review-wrap">
                                <div class="rating-score-wrap">
                                  <?php echo houzez_get_stars($total_ratings, false); ?>
                                </div>
                                <h2><?php echo esc_attr($total_review); ?> <?php echo esc_attr($review_label); ?></h2>
                              </div>
                              <!-- !review -->

                              <!-- features -->
                              <ul class="property-features-wrap">
                                <?php if (!empty($property_type) && houzez_option('disable_type', 1)) : ?>
                                  <li>
                                    <span class="key"><?php esc_html_e('Type:', 'houzez'); ?></span>
                                    <span class="value"><?php echo esc_attr($property_type); ?></span>
                                  </li>
                                <?php endif; ?>

                                <?php if (!empty($listing_min_term)) : ?>
                                  <li>
                                    <span class="key"><?php esc_html_e('Minimum Term:', 'houzez'); ?></span>
                                    <span class="value"><?php echo esc_attr($listing_min_term); ?></span>
                                  </li>
                                <?php endif; ?>

                                <?php if (!empty($listing_area_size)) : ?>
                                  <li>
                                    <span class="key"><?php esc_html_e('Square Footage:', 'houzez'); ?></span>
                                    <span class="value"><span class="hz-figure"><?php echo esc_attr($listing_area_size); ?></span> <span class="hz-figure area_postfix"><?php echo esc_attr($listing_size_unit); ?></span></span>
                                  </li>
                                <?php endif; ?>

                                <li>
                                  <span class="key"><?php esc_html_e('Utilities Included?:', 'houzez'); ?></span>
                                  <span class="value"><?php echo esc_attr(!empty($listing_utilities) ? "Yes!" : "No!"); ?></span>
                                </li>

                                <?php if (!empty($listing_laundry)) : ?>
                                  <li>
                                    <span class="key"><?php esc_html_e('Laundry:', 'houzez'); ?></span>
                                    <span class="value"><?php echo esc_attr($listing_laundry); ?></span>
                                  </li>
                                <?php endif; ?>

                                <li>
                                  <span class="key"><?php esc_html_e('Furniture Included?:', 'houzez'); ?></span>
                                  <span class="value"><?php echo esc_attr(!empty($listing_furniture) ? "Yes!" : "No!"); ?></span>
                                </li>

                              </ul>
                              <!-- !features -->

                              <!-- infos -->
                              <ul class="property-info-wrap">

                                <?php if (!empty($listing_phone_no)) : ?>
                                  <li class="whatsapp">
                                    <a href="<?php echo esc_attr($listing_phone_no); ?>">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                        <path d="M15.9336 3.06426C12.3793 -0.488968 6.61748 -0.488115 3.06426 3.06621C-0.488968 6.62054 -0.488115 12.3823 3.06621 15.9356C6.62054 19.4888 12.3823 19.4879 15.9355 15.9336C17.642 14.2266 18.6004 11.9116 18.5999 9.49795C18.5994 7.08468 17.6403 4.77043 15.9336 3.06426ZM14.1815 13.0761C14.1811 13.0765 14.1807 13.0769 14.1803 13.0773V13.0743L13.7192 13.5323C13.1229 14.1361 12.2545 14.3846 11.4291 14.1875C10.5974 13.9649 9.80688 13.6106 9.08734 13.138C8.41885 12.7107 7.79934 12.2113 7.24005 11.6486C6.72544 11.1378 6.26311 10.5768 5.85987 9.97421C5.41881 9.32576 5.0697 8.61937 4.82247 7.87513C4.53906 7.00082 4.77392 6.04145 5.42915 5.39691L5.96907 4.85699C6.11919 4.7062 6.36311 4.70567 6.51386 4.85578C6.51425 4.85617 6.51468 4.85656 6.51507 4.85699L8.21979 6.56171C8.37058 6.71182 8.37111 6.95575 8.221 7.1065C8.22061 7.10689 8.22022 7.10728 8.21979 7.10771L7.21879 8.10871C6.93157 8.3928 6.89546 8.84424 7.13387 9.17039C7.49591 9.66726 7.89656 10.1348 8.33205 10.5688C8.81758 11.0564 9.34541 11.5 9.90936 11.8943C10.2352 12.1216 10.677 12.0833 10.9589 11.8033L11.9265 10.8205C12.0766 10.6698 12.3205 10.6692 12.4713 10.8193C12.4717 10.8197 12.4721 10.8201 12.4725 10.8205L14.1803 12.5313C14.3311 12.6814 14.3316 12.9253 14.1815 13.0761Z" fill="#3EB24E" />
                                      </svg>
                                    </a>
                                  </li>
                                <?php endif; ?>

                                <?php if (houzez_option('prop_detail_favorite') != 0) { ?>
                                  <li class="item-tool houzez-favorite">
                                    <span class="add-favorite-js item-tool-favorite" data-listid="<?php echo intval($post->ID) ?>">
                                      <i class="stock far fa-heart <?php echo esc_attr($icon); ?>"></i>
                                      <i class="fill fas fa-heart <?php echo esc_attr($icon); ?>"></i>
                                    </span><!-- item-tool-favorite -->
                                  </li><!-- item-tool -->
                                <?php } ?>
                              </ul>

                            </div>
                          </div>
                        </div>
                      </div>

                    </div>


                    <div class="tab-pane fade" id="propertyMap" role="tabpanel">
                      <?php get_template_part('property-details/partials/map'); ?>
                    </div>
                  </div>

                  <div class="property_overview_accommodation">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="property_overview_accommodation_content">
                          <h4 class="title"><?php esc_html_e('Property Overview', 'houzez'); ?></h4>

                          <ul class="overview_list">
                            <?php if (!empty($google_map_address)) : ?>
                              <li>
                                <span class="key"><?php esc_html_e('Location:', 'houzez'); ?></span>
                                <span class="value"><?php echo esc_html($google_map_address); ?>

                                  <a href="<?php echo esc_url($google_map_address_url); ?>" target="_blank" class="location_url"><i class="fas fa-share-alt"></i> <?php esc_html_e('View Property location', 'houzez'); ?></a>
                                </span>
                              </li>
                            <?php endif;

                            if (!empty($listing_price)) : ?>
                              <li>
                                <span class="key"><?php esc_html_e('Price', 'houzez'); ?></span>
                                <span class="value"><?php echo houzez_listing_price_v5(); ?>
                                  <?php if (!empty($listing_available_on)) : ?>
                                    <span class="available"><?php echo esc_attr($listing_available_on); ?></span>
                                  <?php endif; ?>
                                </span>
                              </li>
                            <?php endif;

                            if (!empty($listing_min_term)) : ?>
                              <li>
                                <span class="key"><?php esc_html_e('Minimum Term:', 'houzez'); ?></span>
                                <span class="value"><?php echo esc_attr($listing_min_term); ?></span>
                              </li>
                            <?php endif; ?>
                            <li>
                              <span class="key"><?php esc_html_e('Pet Friendly?', 'houzez'); ?></span>
                              <span class="value"><?php echo esc_attr(!empty($listing_pet_friendly) ? "Yes!" : "No!"); ?></span>
                            </li>

                            <?php if (!empty($listing_bath_type)) :  ?>
                              <li>
                                <span class="key"><?php esc_html_e('Bath Type', 'houzez'); ?></span>
                                <span class="value"><?php echo esc_attr($listing_bath_type); ?></span>
                              </li>
                            <?php endif;

                            if (!empty($listing_entrance_type)) : ?>
                              <li>
                                <span class="key"><?php esc_html_e('Entrance Type', 'houzez'); ?></span>
                                <span class="value"><?php echo esc_attr($listing_entrance_type); ?></span>
                              </li>
                            <?php endif; ?>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <?php if (!empty($property_features)) : ?>
                          <div class="property_overview_accommodation_content">
                            <h4 class="title"><?php esc_html_e('Property Overview', 'houzez'); ?></h4>

                            <ul class="features_list">
                              <?php foreach ($property_features as $feature) : ?>
                                <li><?php echo $feature->name; ?></li>
                              <?php endforeach; ?>
                            </ul>

                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>

                  <?php if (!empty(get_the_content())) : ?>
                    <div class="property_description">
                      <h4 class="title"><?php esc_html_e('Property Description', 'houzez'); ?></h4>

                      <div class="desc">
                        <?php the_content(); ?>
                      </div>
                    </div>
                  <?php endif; ?>

                </div>
              </div>
              <div class="col-lg-4">
                <div class="property_sidebar_wrap">
                  <div class="sidebar_item">
                    <h5 class="title price"><?php echo houzez_listing_price_v5(); ?></h5>
                    <?php if (!empty($listing_min_term)) : ?>
                      <div class="min_term"><?php echo esc_attr($listing_min_term); ?></div>
                    <?php endif;

                    if (!empty($listing_available_on)) :
                    ?>
                      <div class="min_term"><?php echo esc_attr($listing_available_on); ?></div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><!-- listing-wrap -->

<?php endwhile;
    endif;
  } // <!-- end elementor location -->
} ?> <!-- end houzez_check_is_elementor -->

<?php get_footer(); ?>