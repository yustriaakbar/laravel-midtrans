<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/xfavicon.png.pagespeed.ic.ZPA6oHfdtf.webp" type="image/png">
    <title>Laravel Midtrans</title>
    <link rel="stylesheet" href="{{ asset('style.css')}}" />
    <link rel="stylesheet" href="{{ asset('style_2.css')}}" />
</head>

<body>
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">

                    <a class="navbar-brand logo_h" href="index.html">
                        <img src="data:image/webp;base64,UklGRjYEAABXRUJQVlA4TCoEAAAvcEAHENfFqG0jQX4vjOOPsp2ZoyAQSGLZH2QsgUCKYxliBG3b5kl6/lAP4Yrctm2gawf9DZyvPt5P7w9oEABccIaLAAAoniLguFcInC9hKISB6jkIMAxAiIEVBiFYiAMey6SiyUEIwDWnA7blaAojOmdDI01ARISyZds2bWd+wrVt27Z9Y9u2bSf7XNva8yDJjn5v4yj3fcyI/k+Aw0iS2ugWeeHyj5eDNxHMRfR/AkbbyMdbFfL3rdVcj2iRMRDNI7mrqt/N8nKDO3kHHszOKe+gyOyDAyVONyqXedbvPs7Z1MOalaTX6smiQDKUopPqh2QrPw9u2eY++d2tjYgzqq3ObnaAtwYiyDRiYEsOmdnrbOrZ8I1bfreTC6nkA7+pdxn9PbPOMvXy/g3ByymW9TN/jVz1b/hDCeXzTr/L5EOAq13h8T3xOiCg/tDtN8oMFLl9qD6ADOP3jLPS4SIc4Cy38nFeTj/OoP+BfWTyOwGu5ucsb/eXauRBrXS/sDxvdhHgGB+xu3UKnCTY7R8HuYUMU4/YWFZvVjmtOapurrLYjqaSYRMPkSfSsAvC/vLXhKIZAEjf+5rlS7PdTJo/s7zZm06mmjL522OXgP4fqFHP2E0AxB9e4ifRRlFPeOlIPFm0n+Za8tQroJobzx3FabVYvaMZtDcie9jBl4MtAIGn1LkiXfaMeiqQrAZf5v3kqSrgtbHID4Mk9zUOucXBXnV+X4IFoHh6LZuQvSrFZDVh37y63+6pLuC2MWveFrJtmhYHjSzy9eJweapmgJTpyRDIdAoZaqnlwxe/skgjeXTYgMPcENz1BGKykR/B9lyCzcPI5u6Hsywin/b8IwDlfBJSTgD+7fnEIjL7cPfmGHnMLQuXQRKHlw2S2AxeQTM6zhmEP1Fx+Z03PgQTgJsrchMAwt7f6CqIj/pDyOCzXsIDeonYRXJOgy64OzRBNspQr5NpaJ6ulKVMVxBKptfUDG8dXk7yV6pWJ7jA/SbGQSzQWeznS+SNCvAOj+Yreek10V7w9XRLDSwNltKv8QvNG82ygG4gILqda0WwX34zwe/LLJPPHt27vCvHTsAVlqsA7Dm7Lt979GyS5fJv8kIyOAWb0QXZ+KQLHhu7LRfN88kDR88/HH8ZQs75b1/nQSHPJh6eP3rgBM8XkecnCLidx6haQ0AxOPUsoZfv/iAAsYmUxseEQQlxAPDjDveQD1QBMbAFn7wC9kiCbgnH+H21g/Q9XFnBvaR3VL7nY+QLXIJkl+ZLhKZhbnbN8/i53nDCeQ4K4POE8N5zYzzfRV69ZmyCx+5hO4Fum7gcchrisY8D+h4v83Ieno4Txp4hb5mXH/cHwNdrNPtmC7DvOqNLK+njK8KrT1RZGu2kbfLLC8LzL7Sd3l/QsPBgW+nmJ5DubcV5fBHHnf8p">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <div class="row ml-0 w-100">
                            <div class="col-lg-12 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">home</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="causes.html">causes</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="events.html">events</a>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="about.html">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="donation.html">donation</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="elements.html">Elements</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="blog.html">Blog</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="single-blog.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="main_btn" href="donation.html">donate now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section class="make_donation section_gap">
        <div class="container">
            <div class="row justify-content-start section-title-wrap">
                <div class="col-lg-12">
                    <h1>Make a Donation Today</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem facilis nesciunt nam
                        quod nemo eum, vitae architecto distinctio reiciendis?
                    </p>
                </div>
            </div>
            <div class="donate_now_wrapper">
                <form id="donation" onsubmit="return submitForm();">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="donate_box mb-30">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input id="donor_name" name="donor_name" type="text" placeholder="Nama" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="donate_box mb-30">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="donor_email" name="donor_email" type="email" placeholder="Email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="donate_box mb-30">
                                <div class="form-group">
                                    <label>Jenis Donasi</label>
                                        <select id="donation_type" name="donation_type" class="form-control" required>
                                            <option value=""></option>
                                            <option value="infak_kemanusiaan">Infak Kemanusiaan</option>
                                            <option value="infak_pendidikan">Infak Pendidikan</option>
                                            <option value="infak_kesehatan">Infak Kesehatan</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="donate_box">
                                <div class="form-group">
                                    <input id="amount" name="amount" type="number" placeholder="Nominal Donasi" class="form-control" min="10000" max="999999999" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="donate_box">
                                <div class="form-group">
                                    <textarea  id="note" name="note" type="text" placeholder="Pesan" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="donate_box">
                                <button type="submit" class="main_btn w-100">donate now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="our_major_cause section_gap">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>Daftar Donatur</h1>
                    <br><br>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Donatur</th>
                            {{-- <th scope="col">Email</th> --}}
                            <th scope="col">Nominal</th>
                            <th scope="col">Jenis Donasi</th>
                            <th scope="col">Status</th>
                            <th style="text-align: center;">Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donations as $donation)
                        <tr>
                            <th scope="row">{{ $donation->id }}</th>
                            <td>{{ $donation->donor_name }}</td>
                            {{-- <td>donatur@example.com</td> --}}
                            <td>Rp. {{ number_format($donation->amount) }},-</td>
                            <td>{{ ucwords(str_replace('_', ' ', $donation->donation_type)) }}</td>
                            <td>{{ ucfirst($donation->status) }}</td>
                            <td style="text-align: center;">
                                @if ($donation->status == 'pending')
                                <button class="btn btn-success btn-sm" onclick="snap.pay('{{ $donation->snap_token }}')">Complete Payment</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
function submitForm() {
    $.post("{{ route('donation.store') }}",
    {
        _method: 'POST',
        _token: '{{ csrf_token() }}',
        amount: $('input#amount').val(),
        note: $('textarea#note').val(),
        donation_type: $('select#donation_type').val(),
        donor_name: $('input#donor_name').val(),
        donor_email: $('input#donor_email').val(),
    },
    function (data, status) {
        if (data.status == 'error') {
            alert(data.message);
        } else {
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    console.log("success")
                    location.reload();
                },
                // Optional
                onPending: function (result) {
                    console.log("pending")
                    location.reload();
                },
                // Optional
                onError: function (result) {
                    location.reload();
                }
            });
        }
    });
    return false;
}
</script>

</body>

</html>