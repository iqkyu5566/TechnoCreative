
        <h2>Tutorial List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Judul Tutorial</th>
		<th>Gambar Tutorial</th>
		<th>Isi Tutorial</th>
		<th>Url Tutorial</th>
		<th>Id Kategori</th>
		<th>Tanggal</th>
		
            </tr><?php
            foreach ($tutorial_data as $tutorial)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tutorial->judul_tutorial ?></td>
		      <td><?php echo $tutorial->gambar_tutorial ?></td>
		      <td><?php echo $tutorial->isi_tutorial ?></td>
		      <td><?php echo $tutorial->url_tutorial ?></td>
		      <td><?php echo $tutorial->id_kategori ?></td>
		      <td><?php echo $tutorial->tanggal ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
   