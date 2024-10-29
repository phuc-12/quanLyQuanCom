# quanLyQuanCom
--- Lưu ý ---
1. git clone https://github.com/phuc-12/quanLyQuanCom.git
2. Mỗi người khi code sẽ push lên branch của mình, ko đc push bằng branch main vì sẽ gây xung đột
3. Trước khi bắt đầu code thì hãy chuyển sang branch main để pull code về trước (git pull)
--- Lệnh ---
1. Kiểm tra branch: git branch
2. Chuyển branch: git checkout Tenbranch   (vd: git checkout phuc)
   <Sau khi code xong>
1. git add .
2. git commit -m "ghi chú"   (phần ghi chú thì ghi đã làm đc gì)
3. git push
4. Sau khi push, lên trang git nhấn Pull requests để gộp code từ branch của mình sang branch main
5. Có code mới thì sang branch main để gộp code từ branch main sang branch của mình:
   git checkout main --> git merge main TenBranch (vd: git merge main phuc), r sang branch của mình để code: git checkout phuc
