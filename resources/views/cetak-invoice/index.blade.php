<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/invoice.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row">
                            <!-- BEGIN INVOICE -->
                            <div class="col-xs-12">
                                <div class="grid invoice">
                                    <div class="grid-body">
                                        <div class="invoice-title">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <img src="../img/Logo-Sentra.png" width="130">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <h2 class="mb-2">INVOICE<h2>
                                                    <span class="small">
                                                        SMJ-{{ $datainvoice->invoice_produk }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xl-8">
                                                <address>
                                                    <strong>DITERBITKAN ATAS NAMA</strong><br>
                                                    PT SENTRA MEDAN JAYA<br>
                                                </address>
                                            </div>
                                            <div class="col-xl-4 text-right">
                                                <address>
                                                    <strong>UNTUK</strong>
                                                    <table>
                                                        <tr>
                                                            <td>Pembeli</td>
                                                            <td>: <strong>{{ $datainvoice->nama_user }}</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nomor Telepon</td>
                                                            <td>: <strong>Kevin Allen</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Pembelian</td>
                                                            <td>: <strong>17/06/14</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat Pengiriman</td>
                                                            <td>: Jln. Brigjend Katamso Belakang No.42, Medan Maimun, Kota Medan</td>
                                                        </tr>
                                                    </table>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <h3>ORDER SUMMARY</h3>
                                                <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr class="line">
                                                            <td><strong>No</strong></td>
                                                            <td class="text-right"><strong>Nama Produk</strong></td>
                                                            <td class="text-center"><strong>Unit</strong></td>
                                                            <td class="text-center"><strong>Harga</strong></td>
                                                            <td class="text-center"><strong>SUBTOTAL</strong></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($datainvoice as $kunciinvoice)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $kunciinvoice->nama_produk }}</strong></td>
                                                            <td class="text-center">{{ $kunciinvoice->unit_produk }}</td>
                                                            <td class="text-center">{{ $kunciinvoice->harga_produk }}</td>
                                                            <td class="text-center">Rp {{ $kunciinvoice->harga_produk*$kunciinvoice->unit_produk }},-</td>
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                            <td colspan="3">
                                                            </td><td class="text-center"><strong>Total</strong></td>
                                                            <td class="text-center"><strong>Rp {{ $hitunginvoice }},-</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                            </td><td class="text-center"><strong>Metode Pembayaran</strong></td>
                                                            <td class="text-center"><strong>{{ $datacart->nama_bank }} ( Transfer Manual )</strong></td>
                                                        </tr>
                                                    </tbody>
                                                    </div>
                                                </table>
                                            </div>									
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END INVOICE -->
                        </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>