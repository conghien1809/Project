<section>
        <div class="container mt-5">
            <h2 class="text-center">Quản Lý Nhân Viên</h2>
            
            <!-- Nút thêm nhân viên -->
            <a href="./add-emp.html" class="btn btn-success mb-3">Thêm Nhân Viên</a>
            <a href="./watch-ca.html" class="btn btn-success mb-3">Xem Ca Làm Nhân Viên</a>
    
            <!-- Bảng danh sách nhân viên -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã Nhân Viên</th>
                        <th>Tên Nhân Viên</th>
                        <th>Địa Chỉ</th>
                        <th>Số Điện Thoại</th>
                        <th>Chức Vụ</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody id="employeeTable">
                    <!-- Dữ liệu nhân viên sẽ được thêm vào đây -->
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Văn A</td>
                        <td>123 Đường A, Quận 1</td>
                        <td>0123456789</td>
                        <td>Quản lý</td>
                        <td>
                            <a href="update-emp.html?id=1" class="btn btn-warning btn-sm">Sửa</a>
                            <button class="btn btn-danger btn-sm" onclick="deleteEmployee(1)">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Trần Thị B</td>
                        <td>456 Đường B, Quận 2</td>
                        <td>0987654321</td>
                        <td>Nhân viên bán hàng</td>
                        <td>
                            <a href="update-emp.html?id=2" class="btn btn-warning btn-sm">Sửa</a>
                            <button class="btn btn-danger btn-sm" onclick="deleteEmployee(2)">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Lê Văn C</td>
                        <td>789 Đường C, Quận 3</td>
                        <td>0123456780</td>
                        <td>Nhân viên bếp</td>
                        <td>
                            <a href="update-emp.html?id=3" class="btn btn-warning btn-sm">Sửa</a>
                            <button class="btn btn-danger btn-sm" onclick="deleteEmployee(3)">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Nguyễn Thị D</td>
                        <td>321 Đường D, Quận 4</td>
                        <td>0987654322</td>
                        <td>Nhân viên bán hàng</td>
                        <td>
                            <a href="update-emp.html?id=4" class="btn btn-warning btn-sm">Sửa</a>
                            <button class="btn btn-danger btn-sm" onclick="deleteEmployee(4)">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Trần Văn E</td>
                        <td>654 Đường E, Quận 5</td>
                        <td>0123456781</td>
                        <td>Nhân viên quản lý</td>
                        <td>
                            <a href="update-emp.html?id=5" class="btn btn-warning btn-sm">Sửa</a>
                            <button class="btn btn-danger btn-sm" onclick="deleteEmployee(5)">Xóa</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>