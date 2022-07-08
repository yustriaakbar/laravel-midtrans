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
                            <li class="nav-item @if (Request::is('/')) active @endif">
                                <a class="nav-link" href="{{ url('/') }}">home</a>
                            </li>
                            <li class="nav-item @if (Request::is('donatur')) active @endif">
                                <a class="nav-link" href="{{ url('/donatur') }}">donatur</a>
                            </li>
                            {{--
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
                            </li> --}}
                            <li class="nav-item">
                                <a class="main_btn" href="#">donate now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>