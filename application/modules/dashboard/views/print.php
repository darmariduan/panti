<html>

<head>
    <title>Print Member Data</title>
</head>

<body>

    <center>
        <h2>Member Report</h2>
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>Nama Member</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Tempat Lahir</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Username</th>
            <th>Role</th>
            <?php
            $no = 1;
            foreach ($user as $user) {
                $id         = $user->id;
                $nama       = $user->nama_admin;
                $alamat     = $user->alamat;
                $agama      = $user->agama;
                $tl         = $user->tempat;
                $email      = $user->email;
                $nohp       = $user->nohp;
                $username   = $user->username;
                $level      = $user->level; ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $nama; ?></td>
            <td><?= $alamat; ?></td>
            <td><?= $agama; ?></td>
            <td><?= $tl; ?></td>
            <td><?= $email; ?></td>
            <td><?= $nohp; ?></td>
            <td><?= $username; ?></td>
            <td><?= $level; ?></td>
        </tr>
    <?php
                $no++;
            };
    ?>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>