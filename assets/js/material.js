const materialPrices = {
    "Bột mì": 50000,    // Giá mỗi kg
    "Thịt bò": 200000,
    "Phô mai": 150000,
    "Rau xà lách": 30000
};

// Cập nhật giá mỗi kg và tính tổng tiền khi chọn nguyên liệu
function updatePrice() {
    const materialName = document.getElementById("materialName").value;
    const price = materialPrices[materialName] || 0;
    document.getElementById("price").value = price;
    calculateTotal(); // Tính tổng tiền mỗi khi cập nhật giá
}

// Tính tổng tiền dựa trên số lượng và đơn giá
function calculateTotal() {
    const quantity = parseFloat(document.getElementById("quantity").value) || 0;
    const price = parseFloat(document.getElementById("price").value) || 0;
    const total = quantity * price;
    document.getElementById("total").value = total.toLocaleString("vi-VN"); // Hiển thị tổng tiền có dấu phân cách
}