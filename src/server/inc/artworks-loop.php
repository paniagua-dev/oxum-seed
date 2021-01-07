<script>
    var artworks = {
        works: [
            <?php
            $categories = array();
            /** ARTWORK UI CONFIG **/
            while ($loop->have_posts()) : $loop->the_post();
            $category = print_processed_html(get_the_category()[0]->name);
            ?>
            {
                src: '<?php echo htmlspecialchars(get_field('painting')); ?>',
                description: '<?php echo htmlspecialchars(get_field('description')); ?>',
                label: '<?php the_title(); ?>',
                category: '<?php echo $category; ?>',
                filter: '<?php echo htmlspecialchars(get_field('year')); ?>'
            },
            <?php

            /** SET CATEGORIES **/
            $categories['"' . $category . '"'] = $category;

            /** SET FILTERS **/
            $filters[get_field('year')] = get_field('year');
            ?>
            <?php endwhile; ?>
        ],
        categories: [
            <?php
            foreach ($categories as $category) {
                if (!empty($category) && $category !== '') {
                    echo "'" . $category . "',";
                }
            }
            ?>
        ],
        filters: [
            <?php
            foreach ($filters as $filter) {
                if (!empty($filter) && $filter !== '') {
                    echo "'" . $filter . "',";
                }
            }
            ?>
        ],
        filterLabel: 'Year: '
    };
</script>
