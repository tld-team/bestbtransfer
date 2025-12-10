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
    <a href="<?php echo esc_url($link['url']); ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?> class="border-2 border-button text-white bg-button px-6 py-2 rounded-xl hover:bg-secondary/90 shadow-gold hover:shadow-lg hover:-translate-y-0.5 active:scale-95 transition-all duration-300 flex items-center justify-center <?php echo esc_attr($class); ?>"><?php echo esc_html($link['title']); ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
            class="w-4 h-3 ml-2 transition-transform duration-200 ease-in-out group-hover:translate-x-1">
            <path fill="currentColor" d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-105.4 105.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
        </svg>
    </a>
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
    <a href="<?php echo esc_url($link['url']); ?>" <?php echo $link['target'] ? 'target="_blank"' : ''; ?> class="border-2 border-white text-white font-bold bg-transparent px-6 py-2 rounded-xl hover:shadow-lg hover:-translate-y-0.5 active:scale-95 transition-all duration-300 flex items-center justify-center <?php echo esc_attr($class); ?>">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-3 mr-2 transition-transform duration-200 ease-in-out group-hover:translate-x-1">
            <path fill="currentColor" d="M160.2 25C152.3 6.1 131.7-3.9 112.1 1.4l-5.5 1.5c-64.6 17.6-119.8 80.2-103.7 156.4 37.1 175 174.8 312.7 349.8 349.8 76.3 16.2 138.8-39.1 156.4-103.7l1.5-5.5c5.4-19.7-4.7-40.3-23.5-48.1l-97.3-40.5c-16.5-6.9-35.6-2.1-47 11.8l-38.6 47.2C233.9 335.4 177.3 277 144.8 205.3L189 169.3c13.9-11.3 18.6-30.4 11.8-47L160.2 25z" />
        </svg>
        <?php echo esc_html($link['title']); ?>
    </a>
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
        class="border-2 border-[#F06F40] text-white bg-[#F06F40] px-4 py-2 rounded-xl transition-all duration-300 flex items-center justify-center hover:bg-white hover:text-[#F06F40] hover:scale-[1.02] hover:shadow-lg hover:shadow-[#F06F40]/20 active:scale-95 <?php echo esc_attr($class); ?>">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
            <path fill="currentColor" d="M160.2 25C152.3 6.1 131.7-3.9 112.1 1.4l-5.5 1.5c-64.6 17.6-119.8 80.2-103.7 156.4 37.1 175 174.8 312.7 349.8 349.8 76.3 16.2 138.8-39.1 156.4-103.7l1.5-5.5c5.4-19.7-4.7-40.3-23.5-48.1l-97.3-40.5c-16.5-6.9-35.6-2.1-47 11.8l-38.6 47.2C233.9 335.4 177.3 277 144.8 205.3L189 169.3c13.9-11.3 18.6-30.4 11.8-47L160.2 25z" />
        </svg>
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
        class="inline-flex items-center group text-[#FF700A] hover:text-white px-5 py-2.5 rounded-lg bg-transparent hover:bg-[#FF700A] border border-[#FF700A] hover:border-[#FF700A] transition-all duration-300 font-medium hover:shadow-md btn-shadow-animate <?php echo esc_attr($class); ?>">
        <span class="mr-2"><?php echo __('Read more', 'maxwell'); ?></span>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
            class="w-4 h-3 ml-2 transition-transform duration-200 ease-in-out group-hover:translate-x-1">
            <path fill="currentColor" d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-105.4 105.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
        </svg>
    </a>
<?php
}

function link_inline_arrow($link, $class = '')
{
?>
    <a href="<?php echo esc_url($link['url']); ?>"
        title="<?php echo esc_attr($link['title']); ?>"
        class="inline-flex items-center text-button group hover:underline <?php echo esc_attr($class); ?> group">
        <?php echo esc_html($link['title']); ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
            class="w-4 h-3 ml-2 transition-transform duration-200 ease-in-out group-hover:translate-x-1">
            <path fill="currentColor" d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-105.4 105.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
        </svg>
    </a>
<?php
}
