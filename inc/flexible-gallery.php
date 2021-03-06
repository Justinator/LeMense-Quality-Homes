<?php
// check if the flexible content field has rows of data
if( have_rows('flexible_fields') ):
  // loop through the rows of data
  while ( have_rows('flexible_fields') ) : the_row();
    ///////////////////////////////////
    // Simple One Column Block
    //////////////////////////////////
    if( get_row_layout() == 'one_column' ):
      ?>
      <div>
        <?php
        $col_1 = get_sub_field('col_content_1');
        $custom_class = get_sub_field( 'add_custom_class' );
        ?>
        <div class="navWidth">
          <?php
          if( $col_1 ): ?>
            <div>
              <div class="blockText">
                <?php echo $col_1 ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <?php
      ///////////////////////////////////
      // Simple Two Column Block
      //////////////////////////////////
      elseif( get_row_layout() == 'two_column' ):
        ?>
        <div>
          <?php
          $col_1 = get_sub_field('col_content_1');
          $col_2 = get_sub_field('col_content_2');
          ?>
          <div class="flexContainer navWidth">
            <?php
            if( $col_1 ): ?>
              <div class="col50">
                <div class="blockText">
                  <?php echo $col_1 ?>
                </div>
              </div>
            <?php endif;
            if( $col_2 ): ?>
              <div class="col50">
                <div class="blockText">
                  <?php echo $col_2 ?>
                </div>
              </div>
            <?php
            endif;
            ?>
          </div>
        </div>
      <?php
      ///////////////////////////////////
      // Simple Three Column Block
      //////////////////////////////////
      elseif( get_row_layout() == 'three_column' ):
      ?>
      <div>
        <?php
          $col_1 = get_sub_field('col_content_1');
          $col_2 = get_sub_field('col_content_2');
          $col_3 = get_sub_field('col_content_3');
        ?>
        <div class="flexContainer navWidth">
        <?php
          if( $col_1 ): ?>
            <div class="col30">
              <div class="blockText">
                <?php echo $col_1 ?>
              </div>
            </div>
          <?php endif;
          if( $col_2 ): ?>
            <div class="col30">
              <div class="blockText">
                <?php echo $col_2 ?>
              </div>
            </div>
          <?php endif;
          if( $col_3 ): ?>
            <div class="col30">
              <div class="blockText">
                <?php echo $col_3 ?>
              </div>
            </div>
          <?php
          endif;
          ?>
        </div>
      </div>
      <?php
    endif;
  endwhile;
endif;
?>
