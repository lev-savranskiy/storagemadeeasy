<?php


include 'SME.php';

$sme = new SME("lev.savranskiy", "12345678");

$sme->getToken();

$glist = $sme->getGroups();
$flist = $sme->getFolderContents();

?>

<form name="doUploadFiles_form" id="doUploadFiles_form" action="<?php echo $sme->getUploadLink() ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="doUploadFiles" name="function">
    <table class="b-table b-table_compact" style="margin-bottom:0;">
        <tbody><tr class="b-table__header">
            <th class="b-table__td_username">Name</th>
            <th class="b-table__td_username b-table__td_center">Default</th>
            <th class="b-table__td_input">Value</th>
            <th>Description</th>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">fi_pid</b></td>
            <td class="b-table__td_center"><b class="b-text-ok"></b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="fi_pid" value="1177331038" id="doUploadFiles_fi_pid">
                <input type="hidden" value="" id="doUploadFiles_fi_pid_mandatory">
                <input type="hidden" value="int" id="doUploadFiles_fi_pid_type">
            </td>
            <td>Parent folder id. If empty then is uploaded to root folder.</td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">fi_structtype<span class="b-text-danger">*</span></b></td>
            <td class="b-table__td_center"><b class="b-text-ok"></b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="fi_structtype" value="g" id="doUploadFiles_fi_structtype">
                <input type="hidden" value="1" id="doUploadFiles_fi_structtype_mandatory">
                <input type="hidden" value="string" id="doUploadFiles_fi_structtype_type">
            </td>
            <td>Structure type (see <a href="#Structures">Structures</a>). If not important, then set this parameter to 'g'</td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">file_name1<span class="b-text-danger">*</span></b></td>
            <td class="b-table__td_center"><b class="b-text-ok"></b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="file_name1" value="" id="doUploadFiles_file_name1">
                <input type="hidden" value="1" id="doUploadFiles_file_name1_mandatory">
                <input type="hidden" value="string" id="doUploadFiles_file_name1_type">
            </td>
            <td>File 1 name.</td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">file_desc1</b></td>
            <td class="b-table__td_center"><b class="b-text-ok"></b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="file_desc1" value="" id="doUploadFiles_file_desc1">
                <input type="hidden" value="" id="doUploadFiles_file_desc1_mandatory">
                <input type="hidden" value="string" id="doUploadFiles_file_desc1_type">
            </td>
            <td>File 1 description.</td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">file_tags1</b></td>
            <td class="b-table__td_center"><b class="b-text-ok"></b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="file_tags1" value="" id="doUploadFiles_file_tags1">
                <input type="hidden" value="" id="doUploadFiles_file_tags1_mandatory">
                <input type="hidden" value="string" id="doUploadFiles_file_tags1_type">
            </td>
            <td>File 1 tags (comma separated).</td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">file_modified1</b></td>
            <td class="b-table__td_center"><b class="b-text-ok"></b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="file_modified1" value="" id="doUploadFiles_file_modified1">
                <input type="hidden" value="" id="doUploadFiles_file_modified1_mandatory">
                <input type="hidden" value="string" id="doUploadFiles_file_modified1_type">
            </td>
            <td>File 1 modification time</td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">file_metadata1</b></td>
            <td class="b-table__td_center"><b class="b-text-ok"></b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="file_metadata1" value="" id="doUploadFiles_file_metadata1">
                <input type="hidden" value="" id="doUploadFiles_file_metadata1_mandatory">
                <input type="hidden" value="string" id="doUploadFiles_file_metadata1_type">
            </td>
            <td>File 1 metadata. File metadata in format metadataID=value1<enter>metadataID=value2<enter>.... Where <enter> is "\n" symbol.</enter></enter></enter></td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">file_1<span class="b-text-danger">*</span></b></td>
            <td class="b-table__td_center"><b class="b-text-ok"></b></td>
            <td>
                <input type="file" class="paramdoUploadFiles b-input b-input_compact" name="file_1" value="" id="doUploadFiles_file_1">
                <input type="hidden" value="1" id="doUploadFiles_file_1_mandatory">
                <input type="hidden" value="file" id="doUploadFiles_file_1_type">
            </td>
            <td>File 1.</td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">share_gr_id</b></td>
            <td class="b-table__td_center"><b class="b-text-ok">0</b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="share_gr_id" value="0" id="doUploadFiles_share_gr_id">
                <input type="hidden" value="" id="doUploadFiles_share_gr_id_mandatory">
                <input type="hidden" value="int" id="doUploadFiles_share_gr_id_type">
            </td>
            <td>ID of a group to share new file with. If 0 or nothing then no any share is done</td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">share_us_id</b></td>
            <td class="b-table__td_center"><b class="b-text-ok">0</b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="share_us_id" value="0" id="doUploadFiles_share_us_id">
                <input type="hidden" value="" id="doUploadFiles_share_us_id_mandatory">
                <input type="hidden" value="int" id="doUploadFiles_share_us_id_type">
            </td>
            <td>ID of a user in the group specified with the argument `share_gr_id` to share new file with. If 0 then a file is shared to a group (if `share_gr_id` is set )</td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">fi_code</b></td>
            <td class="b-table__td_center"><b class="b-text-ok"></b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="fi_code" value="" id="doUploadFiles_fi_code">
                <input type="hidden" value="" id="doUploadFiles_fi_code_mandatory">
                <input type="hidden" value="string" id="doUploadFiles_fi_code_type">
            </td>
            <td>Code of shared folder to upload, can be  used ONLY with  token  equal to *</td>
        </tr>
        <tr class="api_param_tr b-table__row">
            <td><b title="Mandatory">password</b></td>
            <td class="b-table__td_center"><b class="b-text-ok"></b></td>
            <td>
                <input type="text" class="paramdoUploadFiles b-input b-input_compact" name="password" value="" id="doUploadFiles_password">
                <input type="hidden" value="" id="doUploadFiles_password_mandatory">
                <input type="hidden" value="string" id="doUploadFiles_password_type">
            </td>
            <td>Password for shared folder access</td>
        </tr>

        </tbody></table>

    <input type="submit" value="Submit"/>

</form>

<?php

print_r('<pre>');
echo '<h1>Groups</h1>';
foreach ($glist as  $k=>$v){
    echo $v->gr_id . ': ' . $v->gr_description;
    print_r('<hr/>');
}

echo '<h1>Folders</h1>';

foreach ($flist as  $k=>$v){
    echo $v->fi_id . ': ' . $v->fi_name;
    print_r('<hr/>');
}

print_r('</pre>');