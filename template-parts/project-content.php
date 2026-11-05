<div class="flex-card wow fadeInUp" data-wow-delay="0.2s">
                            <div class="dz-media">
                            <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="dz-content">
                                <h5 class="card-title">
                                <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>

                                </h5>
                                <p class="card-discription">
                                <?php the_excerpt(); ?>
                                </p>
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="detailBtn btn btn-primary">
                                    See Details
                                    <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
