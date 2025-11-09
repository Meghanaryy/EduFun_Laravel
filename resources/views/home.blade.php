@extends('layouts.app')

@section('content')

<div class="hero mb-4 position-relative">
  <div class="container-fluid p-0">
    <img src="{{ asset('img/photo.jpg') }}" 
         class="img-fluid w-100" 
         style="height: 300px; object-fit: cover;" 
         alt="EduFun Background">
<div class="container">
  
  <div class="row">
    <div class="col-md-6 mb-4">
      <div class="card h-100 shadow-sm border-0">
        <img src="{{ asset('img/photo.jpg') }}" alt="Interactive Multimedia" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <h4>Data Science</h4>
          <p>Data Science adalah bidang yang mempelajari bagaimana mengumpulkan, mengolah, menganalisis, dan mengekstrak informasi berharga dari data. 
            Tujuannya adalah membantu pengambilan keputusan berbasis data. Data Science menggabungkan statistik, pemrograman, dan pemahaman bisnis untuk menghasilkan insight yang bermanfaat.</p>
          <a href="{{ url('/category/data-science') }}" class="btn btn-outline-primary">Read more...</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card h-100 shadow-sm border-0">
        <img src="{{ asset('img/photo.jpg') }}" alt="Software Engineering" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <h4>Network Security</h4>
          <p>Network Security adalah bidang yang fokus pada perlindungan jaringan komputer dari ancaman, serangan, dan akses ilegal. Tujuannya adalah menjaga kerahasiaan, integritas, dan ketersediaan data dalam sebuah jaringan.
            Network Security mencakup penggunaan firewall, enkripsi, monitoring, serta praktik keamanan untuk melindungi infrastruktur jaringan.</p>
          <a href="{{ url('/category/network-security') }}" class="btn btn-outline-primary">Read more...</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
