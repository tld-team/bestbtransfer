<?php

/**
 * Renders a link element with a specific class for styling purposes.
 *
 * This function is used to render a link element with a specific class. It is
 * designed to be used when you want to apply a specific styling class to the
 * link element. The class can be used to style the link element as per the
 * requirements of the theme.
 *
 * @param array  $link The link data.
 * @param string $class The class to be applied to the link element.
 */
function link_1($link, $class = '')
{
?>
    <a href="<?php echo esc_url($link['url']); ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?> class="bg-secondary text-gray-900 px-6 py-3 rounded-lg font-semibold text-center hover:bg-amber-500 transition <?php echo esc_attr($class); ?>"><?php echo esc_html($link['title']); ?></a>
<?php
}


/**
 * Renders a link element with a "button-2" class for styling purposes.
 *
 * This function is used to render a link element with a "button-2" class. It is
 * designed to be used when you want to apply a styling class for a button-like
 * link element. The class is commonly used for styling buttons in the theme.
 *
 * @param array  $link The link data.
 * @param string $class The class to be applied to the link element.
 *
 * @since 1.0.0
 */
function link_2($link, $class = '')
{
?>
    <a href="<?php echo esc_url($link['url']); ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?> class="bg-white text-primary px-6 py-3 rounded-lg font-semibold text-center hover:bg-gray-100 transition <?php echo esc_attr($class); ?>"><?php echo esc_html($link['title']); ?></a>
<?php
}


function link_3($link, $class = '')
{
?>
    <a href="<?php echo esc_url($link['url']); ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?> class="bg-white text-primary px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition shadow-lg flex items-center justify-center <?php echo esc_attr($class); ?>">
        <i class="fas fa-calendar-check mr-2"></i> <?php echo esc_html($link['title']); ?>
    </a>
<?php
}
function link_4($link, $class = '')
{
?>
    <a href="<?php echo esc_url($link['url']); ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?> class="border-2 border-white text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-black/10 transition flex items-center justify-center <?php echo esc_attr($class); ?>">
        <i class="fas fa-play-circle mr-2"></i> <?php echo esc_html($link['title']); ?>
    </a>
<?php
}

function link_5($link, $class = '')
{
?>

    <a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="_blank" class="flex items-center group <?php echo esc_attr($class); ?>">
        <?php echo __('Read more', 'maxwell'); ?>
        <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition text-xs"></i>
    </a>
<?php
}
