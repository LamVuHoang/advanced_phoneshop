<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tin_tuc')->insert([
            [
                'tieu_de' => 'Apple buộc người dùng chuyển sang iOS 15', 
                'tom_tat' => 'Apple đã ngừng phát hành bản cập nhật bảo mật cho iOS 14 để thúc đẩy chủ sở hữu của các tiện ích tương thích chuyển sang iOS 15.', 
                'chi_tiet' => '<p>Theo Aroged, điều này diễn ra bất chấp việc nhà sản xuất iPhone từng hứa sẽ thường xuyên tung ra các bản vá bảo mật cho những người không muốn chuyển sang hệ điều hành mới.</p><p>Sau khi phát hành iOS 15, Apple thậm chí còn nói rằng iOS hiện sẽ cung cấp sự lựa chọn giữa hai phiên bản cập nhật phần mềm, trong đó người dùng có thể chỉ cần cài đặt các bản cập nhật bảo mật cho iOS 14 hoặc nâng cấp lên iOS 15.</p>', 
                'ma_nhan_vien_dang_bai' => 1, 
                'hinh' => 'ios15.jpeg', 
                'trang_thai' => 1, 
                'created_at' => '2022-01-01 08:00:00', 
                'updated_at' => '2022-01-01 08:00:00'],
            ['tieu_de' => 'Người dân có thể tự khai mũi tiêm trên ứng dụng PC-Covid', 'tom_tat' => 'Theo Trung tâm Công nghệ phòng, chống Covid-19 Quốc gia, phiên bản 4.2.0 của ứng dụng phòng chống dịch PC-Covid vừa được phát hành trên kho ứng dụng CH Play của Google.', 'chi_tiet' => '<p>Để cập nhật phiên bản mới, người dùng thiết bị chạy hệ điều hành iOS và Android hiện chỉ cần vào các kho ứng dụng App Store hoặc CH Play, gõ "PC-Covid" trong khung tìm kiếm, chọn "PC-Covid Quốc gia" và bấm cập nhật.</p><p>Phiên bản mới của PC-Covid đã được bổ sung 2 tính năng mới: Tự khai mũi tiêm và Ví giấy tờ. Trong đó, với tính năng tự khai mũi tiêm, trong trường hợp thông tin mũi tiêm hiển thị trên ứng dụng PC-Covid chưa chính xác, người dùng có thể tự khai thông tin tiêm và đính kèm ảnh chụp giấy chứng nhận để minh chứng. Sau đó thông tin tiêm sẽ được hiển thị lên với dấu "Tự khai".</p>', 'ma_nhan_vien_dang_bai' => 1, 'hinh' => 'pc15.jpeg', 'trang_thai' => 1, 'created_at' => '2022-01-10 08:00:00', 'updated_at' => '2022-01-10 08:00:00'],
            ['tieu_de' => 'AMD tiếp tục góp mặt trong hệ thống Amazon EC2 mới', 'tom_tat' => 'Vừa qua, AMD cho biết dịch vụ đám mây hàng đầu thế giới Amazon Web Service tiếp tục sử dụng các mẫu CPU dòng EPYC thế hệ mới cho các hệ thống máy tính Amazon EC2 Hpc6a thế hệ mới của mình.', 'chi_tiet' => '<p>Hpc6a sẽ giúp cho người dùng doanh nghiệp tính toán các hoạt động cần đến năng lực xử lý khổng lồ như giải mã bộ gene, tính toán hoạt lực chất lỏng, dự báo thời tiết, hay dự đoán các rủi ro tài chính…Trong thế giới các siêu máy tính hàng đầu thế giới hiện nay, số lượng các máy sử dụng vi xử lý AMD EPYC đang ngày một gia tăng, có đến 73 máy trong danh sách Top 500 máy mạnh nhất thế giới sử dụng dòng vi xử lý này của AMD với 70 kỷ lực thế giới. Con số này sẽ còn tăng lên khi các hệ thống siêu máy tính sử dụng vi xử lý AMD EPYC sẽ tiếp tục ra mắt thị trường trong năm 2022 tới đây.</p><p>Các hệ thống Hpc6a mới sẽ sử dụng các vi xử lý AMD EPYC thế hệ thứ ba mới nhất cho dịch vụ Amazon EC2, đáp ứng được nhu cầu tính toán hiệu suất cao, bộ nhớ và dung lượng lưu trữ lớn nhưng với mức chi phí vô cùng phù hợp.</p>', 'ma_nhan_vien_dang_bai' => 1, 'hinh' => 'amd.jpg', 'trang_thai' => 1, 'created_at' => '2022-01-11 08:00:00', 'updated_at' => '2022-01-11 08:00:00'],
            ['tieu_de' => 'Intel buộc tất cả hãng mainboard ngừng hỗ trợ AVX-512 trên chipset 600 series', 'tom_tat' => 'Intel muốn các hãng bo mạch chủ tung BIOS ngừng hỗ trợ tập lệnh AVX-512 đối với chip thế hệ 12 “Alder Lake”.', 'chi_tiet' => '<p>Theo thông tin chính thức thì CPU Intel thế hệ 12 “Alder Lake” không hỗ trợ tập lệnh AVX-512, nhưng người dùng có thể vô hiệu hóa các nhân tiết kiệm điện Gracemont (chỉ chạy nhân hiệu năng cao Golden Cove) để bật tính năng hỗ trợ tập lệnh này. Việc này cho phép tăng một chút hiệu năng (performance) và hiệu suất (efficiency) so với tập lệnh AVX2. Tuy nhiên, theo báo cáo của trang Igor’s Lab thì điều này có thể sẽ thay đổi các bạn ạ.</p><p>Theo đó, Intel hiện đang yêu cầu các hãng bo mạch chủ ngừng hỗ trợ AVX-512 đối với CPU Intel “Alder Lake” thông qua bản cập nhật BIOS. Chuyện này cũng không quá bất ngờ cho lắm, do sắp tới Intel sẽ ra mắt những con chip “Alder Lake” non-K mà phần lớn chỉ được trang bị nhân hiệu năng cao Golden Cove mà thôi.</p>', 'ma_nhan_vien_dang_bai' => 1, 'hinh' => 'intel.jpg', 'trang_thai' => 1, 'created_at' => '2022-01-12 08:00:00', 'updated_at' => '2022-01-12 08:00:00'],
            ['tieu_de' => 'Điện thoại, MacBook giảm tiền triệu, phụ kiện giảm nửa giá dịp cận Tết', 'tom_tat' => 'Càng gần Tết Nguyên Đán, nhu cầu mua sắm điện thoại, phụ kiện công nghệ,... càng tăng cao. Do đó, khi tích hợp thêm nhiều ưu đãi hấp dẫn kích cầu như điện thoại, MacBook giảm thêm đến 500 ngàn trên giá đã giảm sẵn, phụ kiện giảm đến 62% đã khiến cho thị trường cuối năm sôi động hơn.', 'chi_tiet' => '<p>Ghi nhận thông tin từ hệ thống Di Động Việt - Đại lý ủy quyền chính thức của Apple tại Việt Nam (AAR), đối tác toàn diện của Samsung, OPPO, Xiaomi, JBL,... đây đang là “thời điểm vàng” được khách hàng lựa chọn để mua sắm các thiết bị công nghệ dịp Tết nguyên đán. Để đáp ứng nhu cầu lớn của thị trường, hệ thống đang có nhiều ưu đãi hấp dẫn, chẳng hạn điện thoại giảm thêm đến 500 ngàn đồng trên giá đã giảm, phụ kiện giảm đến 62%. Chương trình Tết siêu sale - Săn deal giờ vàng này báo hiệu một mùa mua sắm dịp sang xuân đầy nhộn nhịp.</p><p>Được biết, chương trình này chỉ diễn ra trong 3 ngày từ 12/01 - 14/01 và áp dụng theo khung từng giờ, càng đến sớm mức giảm càng cao nên khách hàng nên đến sớm để hưởng được mức ưu đãi cao nhất.</p>', 'ma_nhan_vien_dang_bai' => 1, 'hinh' => 'didongviet.jpeg', 'trang_thai' => 1, 'created_at' => '2022-01-13 08:00:00', 'updated_at' => '2022-01-13 08:00:00'],
        ]);
    }
}
