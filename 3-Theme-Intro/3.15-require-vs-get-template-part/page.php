<?php

// get_template_part er URI always theme er ROOT DIRECTORY theke suru krte hy, doesn't matter ami kon directory te asi

// 3.15 LIBRARY OR FUNCTION type er MANDATORY files gulo anbo "require" or "require_once" diye, esara template file gulo anbo "get_template_part" diye


echo '<p>Single Page nigah!</p>';

get_template_part('pt-one');
get_template_part('pt', 'one');

get_template_part('pttwo');