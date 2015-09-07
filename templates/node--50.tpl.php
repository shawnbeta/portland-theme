<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>
    aboutPage"<?php print $attributes; ?>>



    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
        <span class="submitted"><?php print $submitted ?></span>
    <?php endif; ?>

    <div class="content swContentWrap clearfix"<?php print $content_attributes; ?>>
        <div class="about">
            <div class="col-sm-5" >
                <?php print theme_image(array('path' => $node->field_image['und'][0]['uri'],
                  'attributes' => array('class' => array('swImg'))));?>
            </div>
            <p>I'm father, husband, and front end web developer, with a passion
                for delivering great user experiences on mobile and desktop. I
                have over nine years of experience programming applications
                for the web.</p>
                <p>I love experimenting with new technologies and learning new
                    languages. When not writing code I enjoying hanging out with my
                    wife and son, hiking, playing bass and reading/watching science
                    fiction.</p>
            <div class="clearfix myStatus">
                <h2 class="swTitle">My Status</h2>
                <ul>
                    <li>I'm working part-time for Northern Arizona University.</li>
                    <li>I'm wrapping up development on Windwalker Expeditions new Drupal 7 web site.</li>
                    <li>I'm in the home stretch on completing development on Curriculum Decisions new responsive Drupal 7 web site.</li>
                </ul>
            </div>

        </div>
    </div>


</div>
