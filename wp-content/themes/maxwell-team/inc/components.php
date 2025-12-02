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
    <a href="<?php echo esc_url($link['url']); ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?> class="bg-white border-2 border-button text-button bg-transparent px-8 py-4 rounded-xl hover:bg-button hover:text-white transition-all duration-300 flex items-center justify-center <?php echo esc_attr($class); ?>"><?php echo esc_html($link['title']); ?></a>
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
    <a href="<?php echo esc_url($link['url']); ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?> class="border-2 border-button text-white bg-button px-4 py-2 rounded-xl hover:bg-white hover:text-button transition-all duration-300 flex items-center justify-center <?php echo esc_attr($class); ?>"><?php echo esc_html($link['title']); ?></a>
<?php
}


function link_3($link, $class = '')
{
?>
    <a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link['target']; ?>" class="inline-flex items-center rounded-xl border-2 border-button text-white bg-button px-4 py-2 hover:bg-transparent hover:text-button transition-all duration-300 flex items-center justify-center <?php echo esc_attr($class); ?>" role="button">
                    <?php echo $link['title']; ?>
                    <svg class="w-6 h-6 ml-8 -mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
<?php
}
function link_4($link, $class = '')
{
?>
    <a 
    href="<?php echo esc_url($link['url']); ?>" 
    <?php echo $link['target'] ? 'target="_blank"' : ''; ?>
    class="border-2 border-button text-button bg-transparent px-4 py-2 rounded-xl hover:bg-button hover:text-white transition-all duration-300 flex items-center justify-center <?php echo esc_attr($class); ?>"
>
    <i class="fas fa-play-circle mr-2"></i> 
    <?php echo esc_html($link['title']); ?>
</a>
<?php
}

function link_5($link, $class = '')
{
?>

    <a 
    href="<?php echo $link['url']; ?>" 
    title="<?php echo $link['title']; ?>" 
    target="_blank" 
    class="inline-flex items-center group text-[#FF700A] hover:text-white px-5 py-2.5 rounded-lg bg-transparent hover:bg-[#FF700A] border border-[#FF700A] hover:border-[#FF700A] transition-all duration-300 font-medium hover:shadow-md <?php echo esc_attr($class); ?>"
>
    <span class="mr-2"><?php echo __('Read more', 'maxwell'); ?></span>
    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300 text-sm"></i>
</a>
<?php
}
