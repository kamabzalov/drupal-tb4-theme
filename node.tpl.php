<?php
print render($node->body['und'][0]['value']);

if($node->type === 'webform') {
    print render($node->field_content['und'][0]['value']);
    hide($content['field_content']);
    hide($content['field_contact_header_background']);
    hide($content['field_contact_subheader']);
    print render($content);
}
