@extends('admin.layouts.layouts')

@section('content')
    <section style="">
        <div class="container col-xxl-8 py-5">
            <div>
                <h3 class="fw-bold mb-3" style="">Dashboard Admin</h3>
            </div>
            <p class="fw-bold mb-2">Selamat Datang dihalaman Dashboard Admin</p>

            <section class="light">
                <div class="container py-2">
                    {{-- Introducton --}}
                    <article class="postcard light blue">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title blue"><a href="#">Short Introduction</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i> May 25th 2020 </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                                doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                                repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Edit</li>
                            </ul>
                        </div>
                    </article>

                    {{-- About Me --}}
                    <article class="postcard light red">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title red"><a href="#">About Me</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                                doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                                repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Edit</li>
                            </ul>
                        </div>
                    </article>

                    {{-- Skills --}}
                    <article class="postcard light green">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title green"><a href="#">Edit Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                                doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                                repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Edit</li>
                            </ul>
                        </div>
                    </article>

                    {{-- Qualification --}}
                    <article class="postcard light yellow">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title yellow"><a href="#">Qualification</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                                doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                                repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Edit</li>
                            </ul>
                        </div>
                    </article>

                    {{-- Portfolio --}}
                    <article class="postcard light yellow">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title yellow"><a href="#">Portfolio</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                                doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                                repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Edit</li>
                            </ul>
                        </div>
                    </article>

                    {{-- Contact Me --}}
                    <article class="postcard light yellow">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title yellow"><a href="#">Contact Me</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                                doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                                repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                                dolores nobis enim quidem excepturi, illum quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Edit</li>
                            </ul>
                        </div>
                    </article>

                </div>
            </section>
        </div>
    </section>
@endsection
