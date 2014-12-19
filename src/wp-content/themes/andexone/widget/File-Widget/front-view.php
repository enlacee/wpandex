<?php
/**
 * resouce Widget File
 *
 */

    // $attachments = new Attachments( 'attachments' );
    $item_carousel = array();

    if( $attachments->exist() ) {
        while($attachments->get()) {
            if ($attachments->url() != '' &&   $attachments->type() == 'application') {
                $span_ico = '';
                if ( preg_match("#\.#", $attachments->url()) ) {
                    $pos = strpos($attachments->url(), ".");
                    $sub_str = substr($attachments->url(), $pos);

                    if ($sub_str == ".pdf") {
                        $span_ico = '<span class="ico-pdf"></span>';
                    } elseif ($sub_str == ".doc" || $sub_str == ".docx") {
                        $span_ico = '<span class="ico-word"></span>';
                    }
                }

                $item_carousel[] = <<<ITEM
            <li>
           <a class="group1 image-link" href="{$attachments->url()}" title="{$attachments->field('title')}">
            {$attachments->field('title')}  ({$attachments->filesize()})
           </a> {$span_ico}

ITEM;
            }
        }
        $item_string_carousel = implode(" ", $item_carousel);
    }
?>
<div class='textwidget'>
    <div class="wg-boder-black-top"></div>
        <ul>
            <?php echo $item_string_carousel ?>
        </ul>
    <div class="wg-boder-black-bottom"></div>
</div>