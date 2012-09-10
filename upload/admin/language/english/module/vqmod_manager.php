<?php
// Button
$_['button_backup']        = 'Backup';
$_['button_cancel']        = 'Cancel';
$_['button_clear']         = 'Clear';
$_['button_save']          = 'Save';
$_['button_upload']        = 'Upload';
$_['button_vqcache_dump']  = 'vqcache Dump';

// Heading
$_['heading_title']        = 'VQMod Manager';

// Columns
$_['column_action']        = 'Install / Uninstall';
$_['column_author']        = 'Author';
$_['column_delete']        = 'Delete';
$_['column_file_name']     = 'File Name';
$_['column_id']            = 'Name / Description';
$_['column_status']        = 'Status';
$_['column_version']       = 'Version';
$_['column_vqmver']        = 'VQMod Version';

// Entry
$_['entry_author']         = 'Author:';
$_['entry_backup']         = 'Backup VQMod Scripts:';
$_['entry_ext_version']    = 'VQMod Manager Version:';
$_['entry_forum']          = 'Forum Support Thread:';
$_['entry_license']        = 'License:';
$_['entry_status']         = 'VQMod Manager Status:';
$_['entry_upload']         = 'VQMod Upload:';
$_['entry_use_cache']      = 'Output Caching:';
$_['entry_vqcache']        = 'VQMod Cache:';
$_['entry_vqmod_path']     = 'VQMod Path:';
$_['entry_website']        = 'Website:';

// Text Highlighting
$_['highlight']            = '<span style="color: #ff0000">%s</span>';

// Error
$_['error_delete']         = 'Warning: Unable to delete VQMod script!';
$_['error_filetype']       = 'Warning: Invalid filetype!  Please only upload .xml files.';
$_['error_install']        = 'Warning: Unable to install VQMod script!';
$_['error_invalid_xml']    = 'Warning: VQMod script XML syntax does not appear to be valid!';
$_['error_log_size']       = 'Warning: Your VQMod error log is %sMBs.  The limit for VQMod Manager is 6MB.  If you need to view the errors you should download the log by FTP.  Otherwise consider clearing it below.';
$_['error_moddedfile']     = 'Warning: VQMod script attempts to mod file \'%s\' which does not appear to exist!';
$_['error_move']           = 'Warning: Unable to save file on server.  Please check directory permissions.';
$_['error_permission']     = 'Warning: You do not have permission to modify module VQMod Manager!';
$_['error_uninstall']      = 'Warning: Unable to uninstall VQMod script!';

// $_FILE Upload Errors
$_['error_form_max_file_size']   = 'Warning: VQMod script exceeds max allowable size!';
$_['error_ini_max_file_size']    = 'Warning: VQMod script exceeds max php.ini file size!';
$_['error_no_temp_dir']          = 'Warning: No temporary directory found!';
$_['error_no_upload']            = 'Warning: No file selected for upload!';
$_['error_partial_upload']       = 'Warning: Upload incomplete!';
$_['error_php_conflict']         = 'Warning: Unknown PHP conflict!';
$_['error_unknown']              = 'Warning: Unknown error!';
$_['error_write_fail']           = 'Warning: Failed to write VQMod script!';

// VQMod Installation Errors
$_['error_error_log_write']            = 'Unabled to write to VQMod error log! Please set "/vqmod" directory permissions to 755 or 777 and try again.';
$_['error_opencart_xml']               = '"/vqmod/xml/vqmod_opencart.xml" does not appear to exist!  Please upload the OpenCart version of VQMod from <a href="http://code.google.com/p/vqmod/">http://code.google.com/p/vqmod/</a> and try again.';
$_['error_opencart_xml_version']       = 'You appear to be using a version of "vqmod_opencart.xml" that is out-of-date for your store!  Please upload the latest OpenCart version of VQMod from <a href="http://code.google.com/p/vqmod/">http://code.google.com/p/vqmod/</a> and try again.';
$_['error_vqcache_dir']                = '"/vqmod/vqcache" directory does not appear to exist!';
$_['error_vqcache_write']              = 'Unabled to write to "/vqmod/vqcache" directory!  Set permissions to 755 or 777 and try again.';
$_['error_vqmod_dir']                  = '"/vqmod" directory does not appear to exist!';
$_['error_vqmod_opencart_integration'] = 'VQMod has does not appear to have been integrated with OpenCart!';
$_['error_vqmod_script_dir']           = '"/vqmod/xml" directory does not appear to exist!';
$_['error_vqmod_script_write']         = 'Unable to write to "/vqmod/xml" directory!  Set permissions to 755 or 777 and try again.';

// VQMod Log Errors
$_['error_mod_aborted']     = 'Mod Aborted';
$_['error_mod_skipped']     = 'Operation Skipped';

// Success
$_['success_clear_vqcache'] = 'Success: VQMod cache cleared!';
$_['success_clear_log']     = 'Success: VQMod error log cleared!';
$_['success_delete']        = 'Success: VQMod script deleted!';
$_['success_install']       = 'Success: VQMod script installed!';
$_['success_uninstall']     = 'Success: VQMod script uninstalled!';
$_['success_upload']        = 'Success: VQMod script uploaded!';

// Tabs
$_['tab_about']             = 'About';
$_['tab_error_log']         = 'Error Log';
$_['tab_settings']          = 'Settings and Maintenance';
$_['tab_scripts']           = 'VQMod Scripts';

// Text
$_['text_autodetect']       = 'VQMod appears to be installed at the following path. Press Save to confirm path and complete installation.';
$_['text_autodetect_fail']  = 'Unable to detect VQMod installation.  Please download and install the <a href="http://code.google.com/p/vqmod/downloads/list" target="_blank">latest version</a> or enter the non-standard server installation path.';
$_['text_cachetime']        = '%s seconds';
$_['text_delete']           = 'Delete';
$_['text_disabled']         = 'Disabled';
$_['text_enabled']          = 'Enabled';
$_['text_install']          = 'Install';
$_['text_module']           = 'Module';
$_['text_no_results']       = 'No VQMod scripts were found!';
$_['text_success']          = 'Success: You have modified module VQMod Manager!';
$_['text_unavailable']      = '&mdash;';
$_['text_uninstall']        = 'Uninstall';
$_['text_upload']           = 'Upload';
$_['text_use_cache_help']   = 'useCache is depricated as of VQMod 2.1.7'; // @TODO
$_['text_vqcache_help']     = 'Some system files will always be present even after clearing the cache.';

// Version
$_['vqmod_manager_author']  = 'rph';
$_['vqmod_manager_license'] = '<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/legalcode">Attribution-NonCommercial-ShareAlike 3.0 Unported (CC BY-NC-SA 3.0)</a>';
$_['vqmod_manager_version'] = '2.0-alpha';

// Javascript Warnings
$_['warning_required_delete']    = 'WARNING: Deleting \\\'vqmod_opencart.xml\\\' will cause VQMod to STOP WORKING! Continue?';
$_['warning_required_uninstall'] = 'WARNING: Uninstalling \\\'vqmod_opencart.xml\\\' will cause VQMod to STOP WORKING! Continue?';
$_['warning_vqmod_delete']       = 'WARNING: Deleting a VQMod script cannot be undone! Are you sure you want to do this?';
?>