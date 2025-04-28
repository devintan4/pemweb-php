<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./table.css" />
  <title>Table</title>

  <style>
    header {
      text-align: center;
    }

    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    table,
    th,
    td {
      border: 1px solid black;
      text-align: center;
    }

    td {
      padding: 10px 80px;
    }

    thead {
      background-color: bisque;
    }

    tbody {
      background-color: aquamarine;
    }

    .lecturer {
      color: red;
    }
  </style>
</head>

<body>
  <header>
    <p>Program Studi: Teknik Informatika</p>
    <p>Matakuliah: Pemrograman Web</p>
    <p>Jadwal: Senin, Jam 10.15 - 12.50 Ruang A206</p>
  </header>

  <div class="container">
    <table>
      <thead>
        <th>Pertemuan</th>
        <th>Tgl</th>
        <th>Materi</th>
        <th>Pengampu</th>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>10 Februari 2025</td>
          <td>Getting Started in Web Programming</td>
          <td rowspan="2" class="lecturer">Master Edison</td>
        </tr>
        <tr>
          <td>2</td>
          <td>17 Februari 2025</td>
          <td>How the Web Works</td>
        </tr>
        <tr>
          <td>3</td>
          <td>24 Februari 2025</td>
          <td>HTML for Structure</td>
          <td class="lecturer">Septiyan & Dimas</td>
        </tr>
        <tr>
          <td>4</td>
          <td>03 Maret 2025</td>
          <td>Marking up Text</td>
          <td class="lecturer">Master Edison</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>