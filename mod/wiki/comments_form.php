<?php

require_once($CFG->dirroot . '/lib/formslib.php');

class mod_wiki_comments_form extends moodleform {
    function definition() {
        $pageid = optional_param('pageid', 0, PARAM_INT);
        $mform =& $this->_form;

        $current = $this->_customdata['current'];
        $commentoptions = $this->_customdata['commentoptions'];

        // visible elements
        $mform->addElement('editor', 'entrycomment_editor', get_string('comment', 'glossary'), null, $commentoptions);
        $mform->addRule('entrycomment_editor', get_string('required'), 'required', null, 'client');
        $mform->setType('entrycomment_editor', PARAM_RAW); // processed by trust text or cleaned before the display

        // hidden optional params
        $mform->addElement('hidden', 'id', '');
        $mform->setType('id', PARAM_INT);

        $mform->addElement('hidden', 'action', '');
        $mform->setType('action', PARAM_ACTION);

        //-------------------------------------------------------------------------------
        // buttons
        $this->add_action_buttons(false);

        //-------------------------------------------------------------------------------
        $this->set_data($current);
    }

    public function edit_definition($current, $commentoptions) {
        $this->set_data($current);
        $this->set_data($commentoptions);
    }
}
