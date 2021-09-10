jQuery(document).ready(function($) {       
    // Hiển thị danh mục task IELTS
    php_data.child_categories.map((item, index) => {
        $(".child-categories").append(
            `
                <p class="category-child category-${item.category_nicename}" data="${item.cat_ID}" key=${index}>
                    ${item.cat_name}
                </p>
            `
        );
    });

    php_data.pages.map((item, index) => {
        $(".posts-category-id").append(
            `
                <a href="${item.guid}" class="post-category" key=${index}>
                    ${item.post_title}
                </a>  
            `
        );
    });

    php_data.child_categories.map(item => {
        $(`.category-${item.category_nicename}`).on("click", function() {
            let cat_id = $(`.category-${item.category_nicename}`).attr('data');
            $.ajax({
                type: "post",
                dataType: "json",
                url : "https://capnhatxuhuong.xyz/wp-admin/admin-ajax.php ",
                data: {
                    action: "getpost",
                    cat_id: cat_id
                },
                beforeSend: function() {
                    $(".posts-category-id").empty();
                    $(".posts-category-id").append(
                        `
                        <div class="snippet" data-title=".dot-pulse">
                            <div class="stage">
                                <div class="dot-pulse"></div>
                            </div>
                        </div>
                        `
                    );
                },
                success: function(res) {
                    $(".posts-category-id").empty();
                    res.map((item, index) => {
                        $(".posts-category-id").append(
                            `
                                <a href="${item.guid}" class="post-category" key=${index}>
                                    ${item.post_title}
                                </a>  
                            `
                        );
                    });
                },
                error: function( jqXHR, textStatus, errorThrown ){
                    console.log( 'The following error occured: ' + textStatus, errorThrown );
                }
            });
            return false;    
        });
    }); 

    // Hiển thị danh mục và khóa học
    const categoriesCourse = JSON.parse(php_data.categories);
    // categoriesCourse.map((item, index) => {
    //     $(".courses-option").append(
    //         `
    //             <div class="course course-${item.slug}" data=${item.slug} key=${index}>
    //                 KHÓA HỌC ${item.name}
    //             </div>
    //         `
    //     );
    // });


    $(".courses-option").append(
        `
        <div class="course-1">
            <div class="course course-ielts" data="ielts" tabindex="0">
                KHÓA HỌC IELTS
            </div>
        </div>
        <div class="course-2">
            <div class="course-child course-child-1" type="button" 
                data-bs-toggle="collapse" data-bs-target="#collapse1" 
                aria-expanded="false" aria-controls="collapse1">
                <div class="course course-collapse">
                    KHÓA HỌC SAT <i class="fas fa-chevron-down"></i>
                </div>
            </div>

            <div class="collapse" id="collapse1" data="1">
                <div class="card name-course-child" tabindex="10">
                    <div class="course course-sat-1" data="sat-1">
                        KHÓA HỌC SAT 1
                    </div>
                </div>
                <div class="card name-course-child" tabindex="11">
                    <div class="course course-sat-2" data="sat-2">
                        KHÓA HỌC SAT 2
                    </div>
                </div>
            </div>
        </div>
        
        `
    );





    const coursesIELTS = categoriesCourse[0].courses;
    const coursesSAT1 = categoriesCourse[1].courses;
    const coursesSAT2 = categoriesCourse[2].courses;

    const getCourse = (name, slug, classAppend = "courses-category") => (
        name.map((item, index) => {
            $(`.${classAppend}`).append(
                `
                    <div class="course-item">
                        <a href="https://test24h.vn/${slug}/${item.slug}"><img src="${item.avatar ? item.avatar : 'https://storage.googleapis.com/ielts-fighters.appspot.com/elearning-react/2021/06/10/62934497.png'}" /></a>
                        <p class="course-name">${item.name}</p>
                        <p class="course-preview">Đánh giá: 4.5/5 (123 preview)</p>
                        <p class="course-price">${item.cost.toLocaleString()} VNĐ</p>
                        <p class="course-desc">${item.shortDesc ? item.shortDesc : 'Kho đề miễn phí gần 1000 đề thi IELTS. Tính năng luyện thi trực tiếp trên Test24h.vn. Xem lại kết quả và lịch sử làm bài'}</p>
                    </div>   
                `
            );
        })
    );

    getCourse(coursesIELTS, 'ielts');

    categoriesCourse.map((item, index) => {
        $(`.course-${item.slug}`).click(function() {
            $(".courses-category").empty();   
            let nameCourse = item.slug;
            if (nameCourse === 'ielts') {
                getCourse(coursesIELTS, 'ielts');
            } else if(nameCourse === 'sat-1') {
                getCourse(coursesSAT1, 'sat-1');
            } else if(nameCourse === 'sat-2') {
                getCourse(coursesSAT2, 'sat-2');
            }
        });
    });


    // Post Luyện thi IELTS online cùng Test24h
    
    let only_childs = php_data.child_categories.filter(item => item.category_parent === 1);
    let only_grandchilds = php_data.child_categories.filter(item => item.category_parent != 1);
    let is_grandchilds = [];
    
    only_childs.map((item, index) => {
        only_grandchilds.map((item_gc) => {
            if (item_gc.category_parent === item.cat_ID) {
                is_grandchilds.push(item.cat_ID);
                // $(".test-category").append(
                //     `
                //     <div class="category-${item.cat_ID}">
                //         <div class="category-child category-child-${item.cat_ID}" type="button" 
                //             data-bs-toggle="collapse" data-bs-target="#collapse${item.cat_ID}" 
                //             aria-expanded="false" aria-controls="collapse${item.cat_ID}">
                //             ${item.cat_name} <i class="fas fa-chevron-down"></i>
                //         </div>
        
                //         <div class="collapse" id="collapse${item.cat_ID}" data="${item.cat_ID}">
                //             <div class="card card-body name-cate-child-${item_gc.cat_ID}" tabindex="${item.cat_ID}">${item_gc.cat_name}</div>
                //         </div>
                //     </div>
                //     `
                // );
                
                
                $(".test-category").append(
                    `
                    <div class="category-${item.cat_ID}">
                        <div class="d-flex justify-content-between align-items-center category-child category-child-${item.cat_ID}">
                            <a href="${php_data.url}/${item.slug}">${item.cat_name}</a>
                            <div class="category-child category-child-${item.cat_ID}" type="button" 
                                data-bs-toggle="collapse" data-bs-target="#collapse${item.cat_ID}" 
                                aria-expanded="false" aria-controls="collapse${item.cat_ID}">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
        
                        <div class="collapse" id="collapse${item.cat_ID}" data="${item.cat_ID}">
                            <div class="d-flex justify-content-between align-items-center card-body category-grandchild">
                                <a href="${php_data.url}/${item_gc.slug}">${item_gc.cat_name}</a>
                                <div class="name-cate-child-${item_gc.cat_ID}" tabindex="${item.cat_ID}"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </div>
                    </div>
                    `
                );
                
            }
        });
    });

    for (let j = 0; j < only_childs.length; j++) {
        let check=0;
        for (let i = 0; i < is_grandchilds.length; i++) {
            if (only_childs[j].cat_ID != is_grandchilds[i]) check=1;
            else {
                check=0;
                break;
            }
        }
        if (check===1) {
            $(".test-category").append(
                // `
                // <div class="category-${only_childs[j].cat_ID}">
                //     <div class="category-child category-child-${only_childs[j].cat_ID}" type="button" 
                //         data-bs-toggle="collapse" data-bs-target="#collapse${only_childs[j].cat_ID}" 
                //         aria-expanded="false" aria-controls="collapse${only_childs[j].cat_ID}">
                //         ${only_childs[j].cat_name} 
                //     </div>
                // </div>
                // `
                
                `
                <div class="category-${only_childs[j].cat_ID}">
                    <div class="category-child category-child-${only_childs[j].cat_ID}">
                        <a href="${php_data.url}/${only_childs[j].slug}">${only_childs[j].cat_name}</a>
                    </div>
                </div>
                `
                
            );
        }
    }
    
    // Post theo Category
    let isFrontPage = +php_data.front_page;
    
    if (isFrontPage != 1) {
        php_data.posts.map((item, index) => {
            $('.posts-ielts-online').append(
                `
                    <div class="post-item-ielts-online">
                        <a href="${item.guid}">
                            <img src="https://storage.googleapis.com/ielts-fighters.appspot.com/elearning-react/2021/06/10/62934497.png" />
                            <p>${item.post_title}</p>
                        </a>
                    </div>
                `
            );
        })
    } else {
        php_data.posts_ielts_online.map((item, index) => {
            $('.posts-ielts-online').append(
                `
                    <div class="post-item-ielts-online">
                        <a href="${item.guid}">
                            <img src="https://storage.googleapis.com/ielts-fighters.appspot.com/elearning-react/2021/06/10/62934497.png" />
                            <p>${item.post_title}</p>
                        </a>
                    </div>
                `
            );
        })
    }

    only_grandchilds.map((item, index) => {
        $(`.name-cate-child-${item.cat_ID}`).click(function(){  
            $.ajax({
                type: "post",
                dataType: "json",
                url : "https://capnhatxuhuong.xyz/wp-admin/admin-ajax.php ",
                data: {
                    action: "getpostbycategorychild",
                    cat_id: item.cat_ID
                },
                beforeSend: function() {
                    $(".posts-ielts-online").empty();
                    $(".posts-ielts-online").append(
                        `
                        <div class="snippet" data-title=".dot-pulse">
                            <div class="stage">
                                <div class="dot-pulse"></div>
                            </div>
                        </div>
                        `
                    );
                },
                success: function(res) {
                    $('.posts-ielts-online').empty();
                    res.map((item, index) => {
                        $('.posts-ielts-online').append(
                            `
                                <div class="post-item-ielts-online">
                                    <a href="${item.guid}">
                                        <img src="https://storage.googleapis.com/ielts-fighters.appspot.com/elearning-react/2021/06/10/62934497.png" />
                                        <p>${item.post_title}</p>
                                    </a>
                                </div>
                            `
                        );
                    });

                },
                error: function( jqXHR, textStatus, errorThrown ){
                    console.log( 'The following error occured: ' + textStatus, errorThrown );
                }
            });
            return false;   
        })
    })



    // Trang IELTS Listening, hiển thị các bài posts
    const getPosts = (data, classAppend) => {
        data.map((item, index) => {
            $(`.${classAppend}`).append(
                `
                    <div class="post-item-ielts-listening">
                        <p class="post-item-name">${item.post_title}</p>
                        <div class="post-item-desc">
                            <img src="https://capnhatxuhuong.xyz/wp-content/uploads/2021/08/Rectangle-264-1.jpg" />
                            <p>${item.post_title}</p>
                        </div>
                        <a href="${item.guid}" class="post-item-read-more">Chi tiết</a>
                    </div>
                `
            );
        })
    }

    getPosts(php_data.posts, 'recent-posts');
    getPosts(php_data.paged.posts, 'post-ielts-listening');
    
    // Pagination IELTS Listening

    let site = php_data.home_url;
    let num_page = +site[site.length - 1];
    isNaN(num_page) ? num_page = 1 : num_page = site[site.length - 1]

    $('.post-pagination').append(
        `
            ${ +num_page === 1 ? '' : `<a href="https://capnhatxuhuong.xyz/ielts-listening/page/${+num_page - 1}" class="post-prev"><i class="fas fa-angle-left"></i> Prev</a>`}
            <p class="number-page">${num_page}</p>
            ${ +num_page === php_data.paged.max_num_pages ? '' : `<a href="https://capnhatxuhuong.xyz/ielts-listening/page/${+num_page + 1}" class="post-next">Next <i class="fas fa-angle-right"></i></a>`}

        `
    );
    
    // Post nhiều lượt xem

});