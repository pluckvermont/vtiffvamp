<?php //Opening PHP tag

register_nav_menu('top', 'Top Menu');

/**
* add some conditional output conditions for Events Manager
* @param string $replacement
* @param string $condition
* @param string $match
* @param object $EM_Event
* @return string
*/
function filterEventOutputCondition($replacement, $condition, $match, $EM_Event){
    if (is_object($EM_Event)) {
 
        switch ($condition) {
 
            // replace LF with HTML line breaks
            case 'nl2br':
                // remove conditional
                $replacement = preg_replace('/\{\/?nl2br\}/', '', $match);
                // process any placeholders and replace LF
                $replacement = nl2br($EM_Event->output($replacement));
                break;
				
            // #_ATT{Contact Phone}
            case 'has_att_contactphone':
                if (is_array($EM_Event->event_attributes) && !empty($EM_Event->event_attributes['Contact Phone']))
                    $replacement = preg_replace('/\{\/?has_att_contactphone\}/', '', $match);
                else
                    $replacement = '';
                break;
				
				 // #_ATT{Contact Email}
            case 'has_att_contactemail':
                if (is_array($EM_Event->event_attributes) && !empty($EM_Event->event_attributes['Contact Email']))
                    $replacement = preg_replace('/\{\/?has_att_contactemail\}/', '', $match);
                else
                    $replacement = '';
                break;
				
				 // #_ATT{Contact Website}
            case 'has_att_contactwebsite':
                if (is_array($EM_Event->event_attributes) && !empty($EM_Event->event_attributes['Contact Website']))
                    $replacement = preg_replace('/\{\/?has_att_contactwebsite\}/', '', $match);
                else
                    $replacement = '';
                break;
				 // #_ATT{Contact}
            case 'has_att_contact':
                if (is_array($EM_Event->event_attributes) && !empty($EM_Event->event_attributes['Contact']))
                    $replacement = preg_replace('/\{\/?has_att_contact\}/', '', $match);
                else
                    $replacement = '';
                break;
					 // #_ATT{Tickets}
            case 'has_att_tickets':
                if (is_array($EM_Event->event_attributes) && !empty($EM_Event->event_attributes['Tickets']))
                    $replacement = preg_replace('/\{\/?has_att_tickets\}/', '', $match);
                else
                    $replacement = '';
                break;
					 // #_ATT{Contact} has any contact info
            case 'has_att_anycontact':
                if (is_array($EM_Event->event_attributes) && (!empty($EM_Event->event_attributes['Contact']) || !empty($EM_Event->event_attributes['Contact Phone']) || !empty($EM_Event->event_attributes['Contact Email']) || !empty($EM_Event->event_attributes['Contact Website'])))
                    $replacement = preg_replace('/\{\/?has_att_anycontact\}/', '', $match);
                else
                    $replacement = '';
                break;
 
        }
 
    }
 
    return $replacement;
}
 
add_filter('em_event_output_condition', 'filterEventOutputCondition', 10, 4);

add_action('em_event_output_condition', 'my_em_general_notag_event_output_condition', 1, 4);
function my_em_general_notag_event_output_condition($replacement, $condition, $match, $EM_Event){
        if( preg_match('/^no_tags$/',$condition, $matches) ){
                $tags = get_the_terms($EM_Event->post_id, EM_TAXONOMY_TAG);
                if( is_array($tags) && count($tags) > 0 ){
                        $replacement = "";
                }else{
                        $replacement = preg_replace("/\{\/?$condition\}/", '', $match);
                }
               
        }
        return $replacement;
}

add_filter('widget_text', 'do_shortcode');

add_filter('em_events_get_default_search','my_em_styles_get_default_search_film',1,2);
function my_em_styles_get_default_search_film($searches, $array){
    if( !empty($array['film']) ){
        $searches['film'] = $array['film'];
    }
    return $searches;
}
 
add_filter('em_events_get','my_em_film',1,2);
function my_em_film($events, $args){
    if( !empty($args['film']) ){
        foreach($events as $event_key => $EM_Event){
            if ( !in_array($args['film'], $EM_Event->event_attributes) ){
                unset($events[$event_key]);
            }
        }
    }
    return $events;
}

