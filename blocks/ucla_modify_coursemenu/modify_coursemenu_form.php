<?php

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/lib/formslib.php');

class ucla_modify_coursemenu_form extends moodleform {
    /**
     *  This is going to serve as a proxy for our custom UI.
     **/
    function definition() {
        $mform =& $this->_form;

        $courseid  = $this->_customdata['courseid'];
        $section = $this->_customdata['section'];
        $sections   = $this->_customdata['sections'];
        $landing_page = $this->_customdata['landing_page'];
        $hide_autogenerated_content_default = $this->_customdata['hide_autogenerated_content'];

        $mform->addElement('hidden', 'courseid', $courseid);
        $mform->addElement('hidden', 'section', $section);

        $mform->addElement('hidden', 'newsections', '',
            array('id' => block_ucla_modify_coursemenu::newnodes_domnode));
        
        $mform->addElement('hidden', 'sectionsorder', '',
            array(
                'id' => block_ucla_modify_coursemenu::sectionsorder_domnode
            ));

        $mform->addElement('hidden', 'landingpage', $landing_page,
            array(
                'id' => block_ucla_modify_coursemenu::landingpage_domnode
            ));

        $mform->addElement('hidden', 'serialized', '',
            array(
                'id' => block_ucla_modify_coursemenu::serialized_domnode
            ));

        $mform->addElement('html', html_writer::tag('div',
            get_string('javascriptrequired', 'group'), array('id' => 
                block_ucla_modify_coursemenu::primary_domnode)));
        
        $mform->addElement('button', 'addsectionbutton', 
            get_string('addnewsection', 'block_ucla_modify_coursemenu'),
            array('id' => block_ucla_modify_coursemenu::add_section_button));
        
        $mform->addElement('header', 'additional_options', get_string('additional_options',
            'block_ucla_modify_coursemenu'));        
        
        $mform->addElement('advcheckbox', 'hideautogeneratedcontent', '',
            get_string('hideautogeneratedcontent', 'block_ucla_modify_coursemenu'));
        $mform->setDefault('hideautogeneratedcontent', $hide_autogenerated_content_default);
        
        $this->add_action_buttons();
    }
}
    