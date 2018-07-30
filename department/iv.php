<?php include "includes/header.php"; ?>

            <div class="form-container">
                <h2 class="heading__secondary">Industrial Visit</h2>
                <form action="#" class="form">
                    <div class="form__group">
                        <label for="title" class="form__label--up">
                            Title
                        </label>
                        <input type="text" class="form__input--main" id="title" autocomplete="off">
                    </div>
                    <div class="form__group">
                        <label for="subtitle" class="form__label--up">
                            Sub-title
                        </label>
                        <input type="text" class="form__input--main" id="subtitle" autocomplete="off">
                    </div>
                    <div class="form__group">
                        <label for="description" class="form__label--up">
                            Description
                        </label>
                        <input type="text" class="form__input--main" id="description" autocomplete="off">
                    </div>
                    <div class="form__group">
                        <label for="Date" class="form__label--up">
                            Date
                        </label>
                        <input type="date" class="form__input--main" id="Date">
                    </div>
                    <div class="form__group">
                        <label for="name" class="form__label--up">
                            Industry Name
                        </label>
                        <input type="text" class="form__input--main" id="name">
                    </div>
                    <div class="form__group">
                        <label for="topic" class="form__label--up">
                            Topic
                        </label>
                        <input type="text" class="form__input--main" id="topic">
                    </div>
                    <div class="form__group">
                        <label for="guide" class="form__label--up">
                            Guide
                        </label>
                        <input type="text" class="form__input--main" id="guide">
                    </div>
                    <div class="form__group">
                        <label for="contact" class="form__label--up">
                            Contact
                        </label>
                        <input type="number" class="form__input--main" id="contact">
                    </div>
                    <div class="form__group">
                        <label for="report" class="form__label--up">
                            Report
                        </label>
                        <input type="file" class="form__input--main" id="report">
                    </div>
                    <div class="form__group">
                        <label class="form__label--up margin-bottom-small">Images</label>
                        <div class="input__group">
                            <div class="upload-img-group">
                                <input type="file" id="img1" class="img-input" accept="image/*" hidden>
                                <label for="img1" class="upload-img__span">
                                    <img src="../img/Placeholder.jpg" id="img-1__img" class="upload-img">
                                </label>
                            </div>
                            <div class="upload-img-group">
                                <input type="file" id="img2" class="img-input" accept="image/*" hidden>
                                <label for="img2" class="upload-img__span">
                                    <img src="../img/Placeholder.jpg" id="img-2__img" class="upload-img">
                                </label>
                            </div>
                            <div class="upload-img-group">
                                <input type="file" id="img3" class="img-input" accept="image/*" hidden>
                                <label for="img3" class="upload-img__span">
                                    <img src="../img/Placeholder.jpg" id="img-3__img" class="upload-img">
                                </label>
                            </div>
                            <div class="upload-img-group">
                                <input type="file" id="img4" class="img-input" accept="image/*" hidden>
                                <label for="img4" class="upload-img__span">
                                    <img src="../img/Placeholder.jpg" id="img-4__img" class="upload-img">
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn margin-bottom-medium">Submit &rarr;</button>
                </form>
            </div>
<?php include "includes/footer.php"; ?>