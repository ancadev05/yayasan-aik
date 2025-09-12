@extends('templates.landing-page')

@section('title')
    TPA - TPQ
@endsection

@section('content')
    <section class="section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center border-3 border-bottom border-success mb-3">
                <h4>PROFIL LEMBAGA</h4>
                <h4>PANTI ASUHAN / LKSA AMAL ISLAM KARIANGO</h4>
            </div>

            <h5>A. Identitas Lembaga</h5>
            <div class="ms-5">
                <table class="table table-sm">
                    <tr>
                        <td width="450px">Nama Lembaga</td>
                        <td>: Amal Islam</td>
                    </tr>
                    <tr>
                        <td>Jenis Lembaga</td>
                        <td>: LKSA</td>
                    </tr>
                    <tr>
                        <td>Tahun Berdiri</td>
                        <td>: 2011</td>
                    </tr>
                    <tr>
                        <td>Naungan</td>
                        <td>: Yayasan Amal Islam Kariango</td>
                    </tr>
                </table>
            </div>

            <h5>B. Akreditasi Lembaga</h5>
            <div class="ms-5">
                <table class="table table-sm">
                    <tr>
                        <td width="450px">Akreditasi</td>
                        <td>: C</td>
                    </tr>
                    <tr>
                        <td>Jenis Lembaga</td>
                        <td>: LKSA</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <div class="container mt-4">
  <!-- Nav Tabs -->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi" type="button" role="tab">Deskripsi</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="tujuan-tab" data-bs-toggle="tab" data-bs-target="#tujuan" type="button" role="tab">Tujuan</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="jadwal-tab" data-bs-toggle="tab" data-bs-target="#jadwal" type="button" role="tab">Jadwal</button>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content p-3 border border-top-0" id="myTabContent">
    <div class="tab-pane fade show active" id="deskripsi" role="tabpanel">
      <p>Nasi Santri adalah bentuk alokasi dari amanah para donatur...</p>
    </div>
    <div class="tab-pane fade" id="tujuan" role="tabpanel">
      <p>Tujuan program ini adalah membantu anak yatim, dhuafa, dan lainnya...</p>
    </div>
    <div class="tab-pane fade" id="jadwal" role="tabpanel">
      <p>Distribusi dilakukan setiap hari Jumat secara rutin...</p>
    </div>
  </div>
</div>
@endsection
