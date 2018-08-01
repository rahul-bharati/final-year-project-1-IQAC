<?php include "includes/header.php"; ?>

            <div class="form-container">
                <h2 class="heading__secondary">Events</h2>
                <form action="./ajax/calls/events.php" class="form" method="post" enctype="multipart/form-data">
                    <div class="form__group">
                        <label for="title" class="form__label--up">
                            Title
                        </label>
                        <input type="text" class="form__input--main" name="title" id="title" autocomplete="off">
                    </div>
                    <div class="form__group">
                        <label for="subtitle" class="form__label--up">
                            Sub-title
                        </label>
                        <input type="text" class="form__input--main" name="subtitle" id="subtitle" autocomplete="off">
                    </div>
                    <div class="form__group">
                        <label for="description" class="form__label--up">
                            Description
                        </label>
                        <input type="text" class="form__input--main" name="description" id="description" autocomplete="off">
                    </div>
                    <div class="form__group">
                        <label for="Date" class="form__label--up">
                            Date
                        </label>
                        <input type="date" class="form__input--main" name="date" id="Date">
                    </div>
                    <div class="form__group">
                        <label for="report" class="form__label--up">
                            Report
                        </label>
                        <input type="file" class="form__input--main" name="report" id="report" accept=".doc,.docx,.odt" >
                    </div>
                    <div class="form__group">
                        <label class="form__label--up margin-bottom-small">Images</label>
                        <div class="input__group">
                            <div class="upload-img-group">
                                <input type="file" id="img1" name="image1" class="img-input" accept="image/*" hidden>
                                <label for="img1" class="upload-img__span">
                                    <img src="../img/Placeholder.jpg" id="img-1__img" class="upload-img">
                                </label>
                            </div>
                            <div class="upload-img-group">
                                <input type="file" id="img2" name="image2" class="img-input" accept="image/*" hidden>
                                <label for="img2" class="upload-img__span">
                                    <img src="../img/Placeholder.jpg" id="img-2__img" class="upload-img">
                                </label>
                            </div>
                            <div class="upload-img-group">
                                <input type="file" id="img3" name="image3" class="img-input" accept="image/*" hidden>
                                <label for="img3" class="upload-img__span">
                                    <img src="../img/Placeholder.jpg" id="img-3__img" class="upload-img">
                                </label>
                            </div>
                            <div class="upload-img-group">
                                <input type="file" id="img4" name="image4" class="img-input" accept="image/*" hidden>
                                <label for="img4" class="upload-img__span">
                                    <img src="../img/Placeholder.jpg" id="img-4__img" class="upload-img">
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn margin-bottom-medium" name="submit">Submit &rarr;</button>
                </form>
            </div>
            
<?php include "includes/footer.php"; ?>