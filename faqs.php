 <!-- SECTION FAQ -->

 <section class="faqs">
        <h2>
            Questions fréquemment posées
        </h2>
        <div class="container faqs_container ">
            <article class="faq">
                <div class="faq_icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>
                        Comment puis-je connaître les bons cours pour moi?
                    </h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur Optio illo consequuntur, nihil doloremque dolores quam tempora vero autem fugit reiciendis nulla esse dolore, exercitationem quisquam molestias magnam asperiores ad nesciunt.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>
                        Comment puis-je connaître les bons cours pour moi?
                    </h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur Optio illo consequuntur, nihil doloremque dolores quam tempora vero autem fugit reiciendis nulla esse dolore, exercitationem quisquam molestias magnam asperiores ad nesciunt.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>
                        Comment puis-je connaître les bons cours pour moi?
                    </h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur Optio illo consequuntur, nihil doloremque dolores quam tempora vero autem fugit reiciendis nulla esse dolore, exercitationem quisquam molestias magnam asperiores ad nesciunt.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>
                        Comment puis-je connaître les bons cours pour moi?
                    </h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur Optio illo consequuntur, nihil doloremque dolores quam tempora vero autem fugit reiciendis nulla esse dolore, exercitationem quisquam molestias magnam asperiores ad nesciunt.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>
                        Comment puis-je connaître les bons cours pour moi?
                    </h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur Optio illo consequuntur, nihil doloremque dolores quam tempora vero autem fugit reiciendis nulla esse dolore, exercitationem quisquam molestias magnam asperiores ad nesciunt.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>
                        Comment puis-je connaître les bons cours pour moi?
                    </h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur Optio illo consequuntur, nihil doloremque dolores quam tempora vero autem fugit reiciendis nulla esse dolore, exercitationem quisquam molestias magnam asperiores ad nesciunt.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>
                        Comment puis-je connaître les bons cours pour moi?
                    </h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur Optio illo consequuntur, nihil doloremque dolores quam tempora vero autem fugit reiciendis nulla esse dolore, exercitationem quisquam molestias magnam asperiores ad nesciunt.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>
                        Comment puis-je connaître les bons cours pour moi?
                    </h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur Optio illo consequuntur, nihil doloremque dolores quam tempora vero autem fugit reiciendis nulla esse dolore, exercitationem quisquam molestias magnam asperiores ad nesciunt.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>
                        Comment puis-je connaître les bons cours pour moi?
                    </h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur Optio illo consequuntur, nihil doloremque dolores quam tempora vero autem fugit reiciendis nulla esse dolore, exercitationem quisquam molestias magnam asperiores ad nesciunt.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>
                        Comment puis-je connaître les bons cours pour moi?
                    </h4>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur Optio illo consequuntur, nihil doloremque dolores quam tempora vero autem fugit reiciendis nulla esse dolore, exercitationem quisquam molestias magnam asperiores ad nesciunt.
                    </p>
                </div>
            </article>
        </div>
    </section>


    <script>
        /* Show / hide FAQS answers*/

        const faqs = document.querySelectorAll('.faq');
        faqs.forEach(faq => {
            faq.addEventListener('click', () => {
                faq.classList.toggle('open');

                //change icon

                const icon = faq.querySelector('.faq_icon i');
                if (icon.className === "fa-solid fa-plus") {
                    icon.className = "fa-solid fa-minus";
                }else  
                if (icon.className === "fa-solid fa-minus") {
                    icon.className = "fa-solid fa-plus";
                    
                }
            })
        })
    </script>