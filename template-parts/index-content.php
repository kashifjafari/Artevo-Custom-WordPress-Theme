<div class="flex-card wow fadeInUp" data-wow-delay="0.2s">
                            <div class="dz-media">
                            <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="dz-content">
                                <div class="mediaSub">
                                    <span><?php artevo_category_list(); ?></span> <span class="mx-2">|</span> <span><?php artevo_posted_on() ?></span>
                                </div>
                                <h5 class="card-title">
                                <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>

                                </h5>
                                <p class="card-discription word-wrap">
                                <?php the_excerpt(); ?>
                                </p>
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="detailBtn btn btn-primary">
                                    See Details
                                    <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>