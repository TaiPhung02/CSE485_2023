/* a, Liệt kê các bài viết về các bài hát thuộc thể loại trữ tình*/
SELECT * FROM baiviet WHERE ma_tloai = 2;

/* b, Liệt kê các bài viết cảu tác giả "Nhacvietplus"*/
SELECT * FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia WHERE ten_tgia = "Nhacvietplus";

/*c, Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào*/
SELECT theloai.ten_tloai
FROM theloai
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_bviet IS NULL;

/*d, Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết*/
SELECT ma_bviet, ten_bhat,ten_tgia,ten_tloai,ngayviet 
FROM tacgia,baiviet,theloai 
WHERE theloai.ma_tloai=baiviet.ma_tloai AND tacgia.ma_tgia = baiviet.ma_tgia;

/*e, tìm thể loại có số bài viết nhiều nhất*/
SELECT theloai.ten_tloai 
FROM theloai 
INNER JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai 
GROUP BY theloai.ten_tloai 
ORDER BY COUNT(baiviet.ma_bviet) DESC 
LIMIT 2;


/*f, liệt kê 2 tác giả có số bài viết nhiều nhất */
SELECT tg.ten_tgia, COUNT(*) ten_bhat 
FROM tacgia AS tg 
JOIN baiviet AS bv ON tg.ma_tgia =bv.ma_tgia 
GROUP BY tg.ten_tgia 
ORDER BY ten_bhat 
DESC LIMIT 2;