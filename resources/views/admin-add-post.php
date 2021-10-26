<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <link
            rel="shortcut icon"
            href="../images/icons/favicon.ico"
            type="image/x-icon"
        />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="../../resources/css/admin-posts.css" />
        <script
            src="https://kit.fontawesome.com/c3d761e5d4.js"
            crossorigin="anonymous"
        ></script>
        <title>Unique Blog</title>
    </head>
    <body>
        <header class="header-wrapper">
            <div class="container-xxl">
                <div class="row header-top">
                    <div class="col-2">
                        <a href="/"
                            ><img
                                src="../images/wedding-rings.png"
                                alt=""
                                width="100px"
                                height="100px"
                        /></a>
                    </div>
                    <div class="col-6 title-wrapper">
                        <h1>Unique Blog</h1>
                    </div>
                    <div class="col-4 button-wrapper">
                        <div
                            class="btn-group"
                            role="group"
                            aria-label="Basic outlined example"
                        >
                            <button
                                type="button"
                                class="btn btn-outline-primary"
                            >
                                Логін
                            </button>
                            <button
                                type="button"
                                class="btn btn-outline-primary"
                            >
                                Реєстрація
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Навігація</a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        aria-current="page"
                                        href="#"
                                        >Домашня сторінка</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="container-xxl">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Назва посту</label>
                        <input
                            type="text"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                            placeholder="Введіть назву посту"
                        />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"
                            >Короткий текст статті</label
                        >
                        <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"
                            >Великий текст статті</label
                        >
                        <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Шлях до фото</label>
                        <input
                            type="text"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                            placeholder="Шлях до фото"
                        />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"
                            >Оберіть категорію</label
                        >
                        <select
                            class="form-control"
                            id="exampleFormControlSelect1"
                        >
                            <option>Категорія 1</option>
                            <option>Категорія 2</option>
                            <option>Категорія 3</option>
                            <option>Категорія 4</option>
                            <option>Категорія 5</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
            </div>
        </main>
    </body>
</html>
