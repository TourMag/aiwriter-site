# AI 内容创作工具官网

这是一个为内容创作者设计的 AI 工具平台官网前端示例，包含以下页面：

- 首页（index.html）
- 留言板（contact.html）
- 用户登录（login.html）
- 用户注册（register.html）

> 💡 留言功能基于 PHP 后端，可部署于服务器上，前端展示通过 GitHub Pages 托管。

---

## 🔧 如何部署到 GitHub Pages

1. Fork 或 Clone 本仓库
2. 上传 `.html` 文件至主分支（`main` 或 `master`）
3. 前往 GitHub 仓库 `Settings > Pages`
4. 选择分支为 `main`，目录为 `/ (root)`
5. 保存设置后，访问：

```
https://你的用户名.github.io/aiwriter-site/
```

---

## 📬 留言功能部署建议

由于 GitHub Pages 不支持 PHP，请将 `contact.php` 上传至你自己的服务器（推荐使用宝塔或 Nginx 环境），并修改 `contact.html` 中表单的 `action` 路径指向你的服务地址。

例如：

```html
<form action="https://yourdomain.com/contact.php" method="post">
```

---

## 📧 示例配置

SMTP 发信邮箱: `***@qq.com`  
收件邮箱: `ouym@hotmail.com`

使用 PHPMailer 实现留言自动转发到邮箱。

---

## 🐼 制作团队

由 [熊猫锅头 PandaGuotou](https://github.com/yourusername) 发起开发，致力于打造 AI 驱动的内容创作工具平台。

欢迎关注、Star、Fork！

