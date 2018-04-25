/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : thins

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 24/04/2018 17:59:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tf_addonalbum
-- ----------------------------
DROP TABLE IF EXISTS `tf_addonalbum`;
CREATE TABLE `tf_addonalbum`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `aid` int(11) NOT NULL COMMENT '关联文章ID',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '内容',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `aid`(`aid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_addonalbum
-- ----------------------------
INSERT INTO `tf_addonalbum` VALUES (1, 3, '相册模型1');

-- ----------------------------
-- Table structure for tf_addonarticle
-- ----------------------------
DROP TABLE IF EXISTS `tf_addonarticle`;
CREATE TABLE `tf_addonarticle`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `aid` int(11) NOT NULL COMMENT '关联文章ID',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '内容',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `aid`(`aid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_addonarticle
-- ----------------------------
INSERT INTO `tf_addonarticle` VALUES (1, 1, 'tf_bill --- 【XX】账单信息\n&lt;p&gt;\n	tf_collection --- 【XX】收藏\n&lt;/p&gt;\n&lt;p&gt;\n	tf_order --- 【XX】订单\n&lt;/p&gt;\n&lt;p&gt;\n	tf_withdraw --- 【XX】提现\n&lt;/p&gt;\n&lt;p&gt;\n	图片惰性加载jquery.lazyload.min.js\n&lt;/p&gt;\n&lt;p&gt;\n	&lt;br /&gt;\n&lt;/p&gt;\n&lt;p&gt;\n	jquery.scrollLoading\n&lt;/p&gt;');
INSERT INTO `tf_addonarticle` VALUES (2, 2, '');
INSERT INTO `tf_addonarticle` VALUES (3, 3, '只有简介，没有图');
INSERT INTO `tf_addonarticle` VALUES (4, 4, '&lt;p&gt;\n	&lt;br /&gt;\n&lt;/p&gt;');
INSERT INTO `tf_addonarticle` VALUES (5, 5, '所谓缘分，就是遇见了该遇见的人');
INSERT INTO `tf_addonarticle` VALUES (6, 6, '每一次遗憾都是对生命的一种肯定');
INSERT INTO `tf_addonarticle` VALUES (7, 7, '&lt;p&gt;\n	以为我永远只能一个人生活\n&lt;/p&gt;\n&lt;p&gt;\n	孤单地快乐哀愁\n&lt;/p&gt;\n&lt;p&gt;\n	偶尔可以伪装潇洒自由\n&lt;/p&gt;\n&lt;p&gt;\n	心里慌了起来自己喝酒\n&lt;/p&gt;\n&lt;p&gt;\n	以为你只是一个美丽的偶然\n&lt;/p&gt;\n&lt;p&gt;\n	垂怜我不经意降落\n&lt;/p&gt;\n&lt;p&gt;\n	谁知道你不同 谁知道你不走\n&lt;/p&gt;\n&lt;p&gt;\n	拥抱着我说终于找到了我\n&lt;/p&gt;\n&lt;p&gt;\n	你 看穿我的冷漠 亲吻我的烦忧\n&lt;/p&gt;\n&lt;p&gt;\n	不在乎我曾经的错\n&lt;/p&gt;\n&lt;p&gt;\n	如果不是你的款款温柔\n&lt;/p&gt;\n&lt;p&gt;\n	还以为真爱 只是一个传说\n&lt;/p&gt;\n&lt;p&gt;\n	请 相信我的承诺 虽然有点笨拙\n&lt;/p&gt;\n&lt;p&gt;\n	但我看见幸福的风\n&lt;/p&gt;\n&lt;p&gt;\n	如果我把我的手放在背后\n&lt;/p&gt;\n&lt;p&gt;\n	愿不愿意牵着一起走\n&lt;/p&gt;\n&lt;p&gt;\n	以为你只是一个美丽的偶然\n&lt;/p&gt;\n&lt;p&gt;\n	垂怜我不经意降落\n&lt;/p&gt;\n&lt;p&gt;\n	谁知道你不同 谁知道你不走\n&lt;/p&gt;\n&lt;p&gt;\n	拥抱着我说终于找到了我\n&lt;/p&gt;\n&lt;p&gt;\n	你 看穿我的冷漠 亲吻我的烦忧\n&lt;/p&gt;\n&lt;p&gt;\n	不在乎我曾经的错\n&lt;/p&gt;\n&lt;p&gt;\n	如果不是你的款款温柔\n&lt;/p&gt;\n&lt;p&gt;\n	还以为真爱 只是一个传说\n&lt;/p&gt;\n&lt;p&gt;\n	请 相信我的承诺 虽然有点笨拙\n&lt;/p&gt;\n&lt;p&gt;\n	但我看见幸福的风\n&lt;/p&gt;\n&lt;p&gt;\n	如果我把我的手放在背后\n&lt;/p&gt;\n&lt;p&gt;\n	愿不愿意牵着一起走\n&lt;/p&gt;\n&lt;p&gt;\n	你 看穿我的冷漠 亲吻我的烦忧\n&lt;/p&gt;\n&lt;p&gt;\n	不在乎我曾经的错\n&lt;/p&gt;\n&lt;p&gt;\n	如果不是你的款款温柔\n&lt;/p&gt;\n&lt;p&gt;\n	还以为真爱 只是一个传说\n&lt;/p&gt;\n&lt;p&gt;\n	请 相信我的承诺 虽然有点笨拙\n&lt;/p&gt;\n&lt;p&gt;\n	但我看见幸福的风\n&lt;/p&gt;\n&lt;p&gt;\n	如果我把我的手放在背后\n&lt;/p&gt;\n&lt;p&gt;\n	愿不愿意牵着一起走\n&lt;/p&gt;\n&lt;p&gt;\n	愿不愿意牵着到最后\n&lt;/p&gt;');
INSERT INTO `tf_addonarticle` VALUES (8, 8, '我们做的任何的决定，都没有错；但是，有可能会错过；错过你一辈子也找不回的曾今！');

-- ----------------------------
-- Table structure for tf_addonvideo
-- ----------------------------
DROP TABLE IF EXISTS `tf_addonvideo`;
CREATE TABLE `tf_addonvideo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `aid` int(11) NOT NULL COMMENT '关联文章ID',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '内容',
  `video_url` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '视频地址',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `aid`(`aid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_addonvideo
-- ----------------------------
INSERT INTO `tf_addonvideo` VALUES (1, 2, '视频模型1', '');

-- ----------------------------
-- Table structure for tf_admin
-- ----------------------------
DROP TABLE IF EXISTS `tf_admin`;
CREATE TABLE `tf_admin`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户名',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '密码',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '姓名',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  `moblie` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '手机号码',
  `sex` tinyint(1) NOT NULL DEFAULT 0 COMMENT '性别',
  `logins` int(11) NOT NULL DEFAULT 0 COMMENT '登陆次数',
  `create_time` int(10) NOT NULL DEFAULT 0 COMMENT '注册时间',
  `update_time` int(10) NOT NULL DEFAULT 0 COMMENT '更新时间',
  `reg_ip` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '注册IP',
  `last_time` int(10) NOT NULL DEFAULT 0 COMMENT '最后登录时间',
  `last_ip` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_admin
-- ----------------------------
INSERT INTO `tf_admin` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '苏晓信', '654108442@qq.com', '15823075587', 1, 59, 1502781914, 1502785463, '127.0.0.1', 1524560183, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (2, 'test1', 'e10adc3949ba59abbe56e057f20f883e', '测试账号', '', '', 1, 5, 1502782875, 1502783821, '127.0.0.1', 1502785133, '106.92.245.226', 1);
INSERT INTO `tf_admin` VALUES (3, '不高兴', 'e10adc3949ba59abbe56e057f20f883e', '不高兴', '', '', 1, 0, 1502785283, 1502785283, '127.0.0.1', 1502785283, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (4, '没头脑', 'e10adc3949ba59abbe56e057f20f883e', '没头脑', '', '', 1, 0, 1502785316, 1502785316, '127.0.0.1', 1502785316, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (5, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (6, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (7, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (8, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (9, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (10, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (11, '11', '11', '11', '11', '11', 11, 11, 11, 11, '11', 11, '11', 11);
INSERT INTO `tf_admin` VALUES (12, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (13, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (14, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (15, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (16, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (17, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (18, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (19, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (20, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (21, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (22, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (23, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (24, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (25, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (26, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);
INSERT INTO `tf_admin` VALUES (27, '么么么么', 'e10adc3949ba59abbe56e057f20f883e', '小媳妇', '', '', 1, 0, 1502785706, 1502786064, '127.0.0.1', 1502785706, '127.0.0.1', 1);

-- ----------------------------
-- Table structure for tf_archive
-- ----------------------------
DROP TABLE IF EXISTS `tf_archive`;
CREATE TABLE `tf_archive`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `typeid` int(11) NOT NULL COMMENT '所属分类',
  `mod` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'addonarticle' COMMENT '文章拓展表',
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '标题',
  `title_color` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '标题颜色',
  `title_weight` smallint(1) NULL DEFAULT 0 COMMENT '标题加粗',
  `flag` set('a','h','c','s','j','p') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '属性(头条[h]推荐[c]滚动[s]跳转[j])',
  `jumplink` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '跳转地址',
  `litpic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '缩略图',
  `writer` int(11) NULL DEFAULT NULL COMMENT '用户ID',
  `source` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '来源',
  `keywords` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '关键字',
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '描述',
  `click` int(11) NOT NULL DEFAULT 0 COMMENT '点击数',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '状态',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `typeid`(`typeid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_archive
-- ----------------------------
INSERT INTO `tf_archive` VALUES (1, 6, 'addonarticle', '标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！', '', 0, 'p', 'https://www.baidu.com/', '/uploads/image/20170826/d7adf07b02ad855e948b032bb7720907.jpg', 42, '', 'Guestbook', '标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！标题很长，还有简介，还有图！！', 17, 1, 1500698768, 1504596689);
INSERT INTO `tf_archive` VALUES (2, 5, 'addonarticle', '只有标题', '', 0, '', '', '', 42, '', '', '', 6, 1, 1500997429, 1504596694);
INSERT INTO `tf_archive` VALUES (3, 7, 'addonarticle', '只有简介，没有图', '', 0, '', '', '', 42, '', '', '只有简介，没有图', 61, 1, 1500997910, 1504596694);
INSERT INTO `tf_archive` VALUES (4, 9, 'addonarticle', '你在等全世界的樱花，而我在樱花树下等你', '', 0, 'p', '', '/uploads/image/20170826/a2f7e2021ed0494197a2dc7da220d93e.jpg', 42, '', '', '', 1, 1, 1504578094, 1504596695);
INSERT INTO `tf_archive` VALUES (5, 9, 'addonarticle', '所谓缘分，就是遇见了该遇见的人', '', 0, '', '', '', 42, '', '', '所谓缘分，就是遇见了该遇见的人', 4, 1, 1504578161, 1504596695);
INSERT INTO `tf_archive` VALUES (6, 9, 'addonarticle', '每一次遗憾都是对生命的一种肯定', '', 0, '', '', '', 42, '', '', '每一次遗憾都是对生命的一种肯定', 14, 1, 1504578196, 1504596696);
INSERT INTO `tf_archive` VALUES (7, 8, 'addonarticle', '幸福的风', '', 0, '', '', '', 42, '', '', '以为我永远只能一个人生活，孤单地快乐哀愁，偶尔可以伪装潇洒自由，心里慌了起来自己喝酒，以为你只是一个美丽的偶然，垂怜我不经意降落，谁知道你不同，谁知道你不走，拥抱着我说终于找到了我，你 看穿我的冷漠，亲吻我的烦忧，不在乎我曾经的错，如果不是你的款款温柔，还以为真爱只是一个传说。', 29, 1, 1504578436, 1504691265);
INSERT INTO `tf_archive` VALUES (8, 8, 'addonarticle', '我们做的任何的决定，都没有错；但是，有可能会错过；错过你一辈子也找不回的曾今', '', 0, 'p', '', '/uploads/image/20170905/2c5f6ec66e1c707dec1e0c2887066b8a.jpg', 42, '', '', '我们做的任何的决定，都没有错；但是，有可能会错过；错过你一辈子也找不回的曾今。\n希望我们的梦想，永远不会被忘记，希望有一天，我可以再见面！', 149, 1, 1504595575, 1504604570);

-- ----------------------------
-- Table structure for tf_arctype
-- ----------------------------
DROP TABLE IF EXISTS `tf_arctype`;
CREATE TABLE `tf_arctype`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `pid` int(11) NOT NULL COMMENT '上级ID',
  `typename` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '栏目名称',
  `mid` int(11) NOT NULL DEFAULT 20 COMMENT '栏目模型ID',
  `target` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '弹出方式',
  `jumplink` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '外部跳转地址',
  `dirs` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '栏目目录',
  `litpic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '缩略图',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '内容',
  `sorts` int(11) NOT NULL COMMENT '排序',
  `status` tinyint(1) NOT NULL COMMENT '状态',
  `keywords` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '关键字',
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '描述',
  `templist` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '列表页模板',
  `temparticle` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '内容页模板',
  `pagesize` int(11) NULL DEFAULT NULL COMMENT '分页条数',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_arctype
-- ----------------------------
INSERT INTO `tf_arctype` VALUES (1, 0, '文档', 21, '_self', '', 'blog', '', '', 1, 1, '博客k', '博客d', 'list_article', 'article_article', 1, 1500694046, 1504685181);
INSERT INTO `tf_arctype` VALUES (2, 0, '留言', 20, '_self', '', 'msg', '', '留言', 2, 1, '留言k', '留言d', 'list_page', 'article_page', 20, 1500695122, 1504599199);
INSERT INTO `tf_arctype` VALUES (3, 0, '网站统计', 20, '_self', '', 'pie', '', '单页统计数据', 3, 1, '统计k', '统计d', 'list_page', 'article_page', 20, 1500695130, 1504687134);
INSERT INTO `tf_arctype` VALUES (4, 0, '更新日志', 20, '_self', '', 'log', '', '&lt;p&gt;\n	这里的更新日志慢慢完善！！！\n&lt;/p&gt;\n&lt;p&gt;\n	这里的更新日志慢慢完善！！！\n&lt;/p&gt;\n&lt;p&gt;\n	这里的更新日志慢慢完善！！！\n&lt;/p&gt;\n&lt;p&gt;\n	这里的更新日志慢慢完善！！！\n&lt;/p&gt;\n&lt;p&gt;\n	这里的更新日志慢慢完善！！！\n&lt;/p&gt;\n&lt;p&gt;\n	这里的更新日志慢慢完善！！！\n&lt;/p&gt;\n&lt;p&gt;\n	这里的更新日志慢慢完善！！！\n&lt;/p&gt;', 4, 1, '关于k', '关于d', 'list_page', 'article_page', 20, 1500695142, 1504687097);
INSERT INTO `tf_arctype` VALUES (5, 1, 'tp5', 21, '_self', '', 'tp5', '', '', 1, 1, 'tp5k', 'tp5d', 'list_article', 'article_article', 1, 1500696489, 1504576344);
INSERT INTO `tf_arctype` VALUES (6, 1, 'css', 21, '_self', '', 'css', '', '', 2, 1, 'cssk', 'cssd', 'list_article', 'article_article', 1, 1500696800, 1504576365);
INSERT INTO `tf_arctype` VALUES (7, 1, 'php', 21, '_self', '', 'php', '', '', 3, 1, 'phpk', 'phpd', 'list_article', 'article_article', 1, 1500696912, 1504576360);
INSERT INTO `tf_arctype` VALUES (8, 1, '爱音乐', 21, '_self', '', 'music', '', '', 8, 1, '', '', 'list_article', 'article_article', 1, 1504576437, 1504576495);
INSERT INTO `tf_arctype` VALUES (9, 1, '爱生活', 21, '_self', '', 'life', '', '', 9, 1, '', '', 'list_article', 'article_article', 1, 1504576487, 1504576487);

-- ----------------------------
-- Table structure for tf_arctype_mod
-- ----------------------------
DROP TABLE IF EXISTS `tf_arctype_mod`;
CREATE TABLE `tf_arctype_mod`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '名称',
  `mod` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '模型操作',
  `sorts` int(11) NOT NULL COMMENT '排序',
  `status` tinyint(1) NOT NULL DEFAULT 50 COMMENT '是否显示',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_arctype_mod
-- ----------------------------
INSERT INTO `tf_arctype_mod` VALUES (20, '单页', 'addonpage', 2, 1, 1494571907, 1494572178);
INSERT INTO `tf_arctype_mod` VALUES (21, '文章模型', 'addonarticle', 1, 1, 1494571907, 1494571930);
INSERT INTO `tf_arctype_mod` VALUES (22, '外部链接', 'addonjump', 999, 1, 1494571907, 1494571932);
INSERT INTO `tf_arctype_mod` VALUES (27, '相册模型', 'addonalbum', 4, 1, 1494571907, 1502787613);
INSERT INTO `tf_arctype_mod` VALUES (28, '视频模型', 'addonvideo', 3, 1, 1495004529, 1502779823);

-- ----------------------------
-- Table structure for tf_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `tf_auth_group`;
CREATE TABLE `tf_auth_group`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `module` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'admin' COMMENT '所属模块',
  `level` int(11) NOT NULL COMMENT '角色等级',
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户组中文名称',
  `status` tinyint(1) NOT NULL COMMENT '状态：为1正常，为0禁用',
  `rules` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '用户组拥有的规则id， 多个规则\",\"隔开',
  `notation` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '组别描述',
  `pic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '角色图标',
  `recom` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否推荐首页显示',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_auth_group
-- ----------------------------
INSERT INTO `tf_auth_group` VALUES (1, 'backend', 1090, '超级管理员', 1, '1,50,57,58,59,60,61,62,63,64,51,52,53,54,2,3,29,30,31,56,4,32,33,34,55,5,11,12,13,6,14,27,28,70,94,95,96,97,71,72,73,39,40,41,42,43,46,44,45,47,65,105,106,107,108,109,110,111,112,113,48,49,92,93,80,81,82,83,84,85,86,87,88,89,90,91,98,99,100,101,102,103,104,114,115,116', '我能干任何事', '#dd4b39', 0, 1502780231, 1509205887);

-- ----------------------------
-- Table structure for tf_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `tf_auth_group_access`;
CREATE TABLE `tf_auth_group_access`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '用户id',
  `group_id` int(11) UNSIGNED NOT NULL COMMENT '用户组id',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `uid`(`uid`) USING BTREE,
  INDEX `group_id`(`group_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_auth_group_access
-- ----------------------------
INSERT INTO `tf_auth_group_access` VALUES (1, 1, 1, 1502782413, 1502782413);

-- ----------------------------
-- Table structure for tf_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `tf_auth_rule`;
CREATE TABLE `tf_auth_rule`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `pid` int(11) UNSIGNED NOT NULL COMMENT '父id',
  `module` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'admin' COMMENT '权限节点所属模块',
  `level` tinyint(1) NOT NULL COMMENT '1-项目;2-模块;3-操作',
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '规则唯一标识',
  `title` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '规则中文名称',
  `type` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '状态：为1正常，为0禁用',
  `ismenu` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否导航',
  `condition` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '规则表达式，为空表示存在就验证，不为空表示按照条件验证',
  `icon` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '节点图标',
  `sorts` mediumint(8) NULL DEFAULT 50 COMMENT '排序',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pid`(`pid`) USING BTREE,
  INDEX `module`(`module`) USING BTREE,
  INDEX `level`(`level`) USING BTREE,
  INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 117 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_auth_rule
-- ----------------------------
INSERT INTO `tf_auth_rule` VALUES (1, 0, 'backend', 1, 'Index/index', 'Dashboards', 1, 1, 1, '', 'fa fa-th-large', 1010, 0, 1502786208);
INSERT INTO `tf_auth_rule` VALUES (2, 0, 'backend', 1, '', 'System', 1, 1, 1, '', 'fa fa-gear', 1050, 0, 1497169240);
INSERT INTO `tf_auth_rule` VALUES (3, 2, 'backend', 2, 'Admin/index', 'Admin', 1, 1, 1, '', '', 1, 0, 1493808384);
INSERT INTO `tf_auth_rule` VALUES (114, 3, 'backend', 3, 'Admin/delete', 'Delete', 1, 1, 0, NULL, NULL, 50, 0, 0);
INSERT INTO `tf_auth_rule` VALUES (115, 3, 'backend', 3, 'Admin/edit', 'Edit', 1, 1, 0, NULL, NULL, 50, 0, 0);
INSERT INTO `tf_auth_rule` VALUES (116, 3, 'backend', 0, 'Admin/create', 'Create', 1, 1, 0, NULL, NULL, 50, 0, 0);

-- ----------------------------
-- Table structure for tf_banner
-- ----------------------------
DROP TABLE IF EXISTS `tf_banner`;
CREATE TABLE `tf_banner`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `mid` int(11) NOT NULL COMMENT '模块分类ID',
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '标题',
  `url` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '跳转链接',
  `litpic` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '图片',
  `info` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '简介说明',
  `sorts` int(11) NOT NULL COMMENT '排序',
  `status` int(11) NOT NULL COMMENT '状态',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `mid`(`mid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tf_comment
-- ----------------------------
DROP TABLE IF EXISTS `tf_comment`;
CREATE TABLE `tf_comment`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `mid` int(11) NOT NULL COMMENT '被评论用户id',
  `uid` int(11) NOT NULL COMMENT '评论用户id',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '评论内容',
  `recontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '回复内容',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '状态',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `mid`(`mid`) USING BTREE,
  INDEX `uid`(`uid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tf_config
-- ----------------------------
DROP TABLE IF EXISTS `tf_config`;
CREATE TABLE `tf_config`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `k` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '键',
  `v` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '值',
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '类型',
  `desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '描述',
  `prompt` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '提示',
  `sorts` int(11) NULL DEFAULT NULL COMMENT '排序',
  `status` tinyint(1) NOT NULL COMMENT '是否显示',
  `texttype` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '文本类型',
  `textvalue` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '文本选项值',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `k`(`k`) USING BTREE,
  INDEX `type`(`type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_config
-- ----------------------------
INSERT INTO `tf_config` VALUES (1, 'title', '苏晓信', 'web', '网站标题', '网站标题【title】', 1, 1, 'text', '', 1493863845, 1501663526);
INSERT INTO `tf_config` VALUES (2, 'logo', '/uploads/image/20170826/a2f7e2021ed0494197a2dc7da220d93e.jpg', 'web', '网站LOGO', '网站LOGO，一般用于导航或底部的LOGO图片', 2, 1, 'image', '', 1493864083, 1501663570);
INSERT INTO `tf_config` VALUES (3, 'person', '苏晓信', 'web', '联系人', '联系人', 3, 1, 'text', '', 1493864150, 1493864480);
INSERT INTO `tf_config` VALUES (4, 'address', '184278846', 'web', '联系地址', '联系地址', 4, 1, 'text', '', 1493864266, 1493864485);
INSERT INTO `tf_config` VALUES (5, 'keywords', '苏晓信-keywords', 'web', '网站关键字', '网站关键字，网站首页的【keywords】', 5, 1, 'text', '', 1493864340, 1501663645);
INSERT INTO `tf_config` VALUES (6, 'description', '苏晓信-description', 'web', '网站描述', '网站描述，网站首页的【description】', 6, 1, 'textarea', '', 1493864454, 1501663673);
INSERT INTO `tf_config` VALUES (7, 'copyright', 'Copyright © 2017-2018 苏晓信', 'web', '网站备案号', '网站备案号', 7, 1, 'text', '', 1493864547, 1493864568);
INSERT INTO `tf_config` VALUES (8, 'isbrowse', '0', 'system', '系统浏览模式', '系统浏览模式', 1, 0, 'select', '', 1494066335, 1505468914);
INSERT INTO `tf_config` VALUES (9, 'islog', '0', 'system', '是否开启系统日志', '是否开启系统日志', 2, 0, 'select', '', 1494066832, 1505468915);
INSERT INTO `tf_config` VALUES (10, 'image_format', 'jpg,gif,jpeg,png,bmp', 'up', '上传图片格式', '上传图片格式', 1, 1, 'text', '', 1494067463, 1499080988);
INSERT INTO `tf_config` VALUES (11, 'image_size', '5242880', 'up', '上传文件大小', '1024：1KB，1048576：1MB，5242880：5MB。建议不要超过5MB，避免文件上传失败', 5, 1, 'text', '', 1494067564, 1501572699);
INSERT INTO `tf_config` VALUES (12, 'image_print', '/static/global/face/logo.png', 'up', '水印图片', '水印图片，可为上传的图片添加水印，开启了图片水印功能，请必须上传水印图片', 8, 1, 'image', '', 1494067681, 1501664409);
INSERT INTO `tf_config` VALUES (13, 'file_format', 'doc,docx,xls,xlsx,ppt,htm,html,txt,zip,rar', 'up', '上传文件格式', '上传文件格式', 2, 1, 'text', '', 1495940879, 1495941568);
INSERT INTO `tf_config` VALUES (14, 'flash_format', 'swf,flv', 'up', '上传Flash格式', '上传Flash格式', 3, 1, 'text', '', 1495940963, 1495941577);
INSERT INTO `tf_config` VALUES (15, 'media_format', 'swf,flv,mp3,wav,wma,wmv,mid,avi,mpg,asf,rm,rmvb', 'up', '上传视音频格式', '上传视音频格式', 4, 1, 'text', '', 1495941005, 1495941582);
INSERT INTO `tf_config` VALUES (16, 'upload_path', 'uploads', 'up', '文件上传目录', '文件上传目录', 6, 1, 'text', '', 1495942885, 1495943186);
INSERT INTO `tf_config` VALUES (17, 'isprint', '1', 'up', '是否开启图片水印', '是否开启图片水印', 7, 1, 'select', '', 1495943270, 1495943372);
INSERT INTO `tf_config` VALUES (18, 'print_position', '9', 'up', '水印图片位置', '水印图片位置', 9, 1, 'select', '', 1495996448, 1495996448);
INSERT INTO `tf_config` VALUES (19, 'print_blur', '70', 'up', '水印图片透明度', '水印图片透明度，取值范围【0-100】', 10, 1, 'text', '', 1495996522, 1501664253);
INSERT INTO `tf_config` VALUES (20, 'appkey', '【阿里大于】短信appkey', 'sms', '短信appkey', '短信appkey', 1, 1, 'text', '', 1496207509, 1499163943);
INSERT INTO `tf_config` VALUES (21, 'secretKey', '【阿里大于】短信secretKey', 'sms', '短信secretKey', '短信secretKey', 2, 1, 'text', '', 1496207647, 1499080992);
INSERT INTO `tf_config` VALUES (22, 'sms_free_sign_name', '【阿里大于】短信签名', 'sms', '短信签名', '短信签名', 3, 1, 'text', '', 1496208387, 1499080992);
INSERT INTO `tf_config` VALUES (23, 'sms_code_tpl_code', '【阿里大于】SMS_00000001', 'sms', '短信注册模板', '短信注册模板', 5, 1, 'text', '', 1496208437, 1499080991);
INSERT INTO `tf_config` VALUES (24, 'sms_pwd_tpl_code', '【阿里大于】SMS_00000002', 'sms', '短信密码找回模板', '短信密码找回模板', 6, 1, 'text', '', 1496208571, 1500478651);
INSERT INTO `tf_config` VALUES (25, 'image_url', '', 'up', '图片上传域名地址', '图片上传域名地址，图片路径保存数据库是否带域名，不建议填写，除非很清楚怎么使用', 11, 1, 'text', '', 1496295604, 1501664181);
INSERT INTO `tf_config` VALUES (26, 'sms_end_time', '【阿里大于】30', 'sms', '短信验证时限', '短信验证时单位：分，只填整数', 4, 1, 'text', '', 1498101884, 1500478650);
INSERT INTO `tf_config` VALUES (27, 'login_time', '6000', 'system', '登陆超时时限', '登陆系统多久时间不操作，重新登陆系统，数字整数【10:10秒】', 3, 1, 'text', '', 1505468873, 1505468873);
INSERT INTO `tf_config` VALUES (28, 'api_token_encryption', 'sxx', 'api', 'token加密', 'API接口token接口令牌加密配置字段', 1, 1, 'text', '', 1509206015, 1509206015);
INSERT INTO `tf_config` VALUES (29, 'api_url', 'http://dq.base.com', 'api', '接口地址', 'API接口外部访问地址，可为IP地址', 2, 1, 'text', '', 1509206051, 1509206064);

-- ----------------------------
-- Table structure for tf_flink
-- ----------------------------
DROP TABLE IF EXISTS `tf_flink`;
CREATE TABLE `tf_flink`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `mid` int(11) NOT NULL COMMENT '模块分类ID',
  `webname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '网站名称',
  `url` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '网站链接',
  `info` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '网站简介',
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '站长邮箱',
  `logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '网站logo地址',
  `sorts` int(11) NOT NULL COMMENT '排序',
  `status` int(11) NOT NULL COMMENT '状态',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `mid`(`mid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_flink
-- ----------------------------
INSERT INTO `tf_flink` VALUES (1, 1, '百度', 'https://www.baidu.com/', '百度网址', '1234@qq.com', 'https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png', 1, 1, 1509244824, 1509245150);
INSERT INTO `tf_flink` VALUES (2, 1, '新浪微博', 'http://weibo.com/', '', '123@qq.com', '', 1, 1, 1509244966, 1509244966);

-- ----------------------------
-- Table structure for tf_guestbook
-- ----------------------------
DROP TABLE IF EXISTS `tf_guestbook`;
CREATE TABLE `tf_guestbook`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uid` int(11) NOT NULL DEFAULT 0 COMMENT '用户id',
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '标题',
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '评论内容',
  `recontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '回复内容',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '状态',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `uid`(`uid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_guestbook
-- ----------------------------
INSERT INTO `tf_guestbook` VALUES (1, 1, 'hello', '', '欢迎您的反馈', '', 1, 1502786251, 1502786251);

-- ----------------------------
-- Table structure for tf_login_log
-- ----------------------------
DROP TABLE IF EXISTS `tf_login_log`;
CREATE TABLE `tf_login_log`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uid` int(11) NOT NULL COMMENT '登陆用户ID',
  `ip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'IP地址',
  `country` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '国家',
  `province` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '省',
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '城市',
  `district` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '区',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '状态',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_login_log
-- ----------------------------
INSERT INTO `tf_login_log` VALUES (1, 1, '220.166.96.3', '中国', '四川', '泸州', '', 1, 1502782475, 1502782475);
INSERT INTO `tf_login_log` VALUES (2, 1, '106.92.245.226', '中国', '重庆', '重庆', '', 1, 1502782523, 1502782523);
INSERT INTO `tf_login_log` VALUES (3, 2, '106.92.245.226', '中国', '重庆', '重庆', '', 1, 1502784480, 1502784480);
INSERT INTO `tf_login_log` VALUES (4, 1, '106.92.245.226', '中国', '重庆', '重庆', '', 1, 1502784517, 1502784517);
INSERT INTO `tf_login_log` VALUES (5, 1, '106.92.245.226', '中国', '重庆', '重庆', '', 1, 1502785104, 1502785104);
INSERT INTO `tf_login_log` VALUES (6, 2, '106.92.245.226', '中国', '重庆', '重庆', '', 1, 1502785133, 1502785133);
INSERT INTO `tf_login_log` VALUES (7, 1, '106.92.245.226', '中国', '重庆', '重庆', '', 1, 1502785156, 1502785156);
INSERT INTO `tf_login_log` VALUES (8, 1, '106.92.245.226', '中国', '重庆', '重庆', '', 1, 1502785177, 1502785177);

-- ----------------------------
-- Table structure for tf_module_class
-- ----------------------------
DROP TABLE IF EXISTS `tf_module_class`;
CREATE TABLE `tf_module_class`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '标题',
  `action` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '模块操作',
  `sorts` int(11) NOT NULL COMMENT '排序',
  `status` int(11) NOT NULL COMMENT '状态',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_module_class
-- ----------------------------
INSERT INTO `tf_module_class` VALUES (1, '友情链接', 'flink', 1001, 1, 1499310094, 1500693625);
INSERT INTO `tf_module_class` VALUES (2, '合作伙伴', 'flink', 1002, 1, 1499310095, 1502778579);
INSERT INTO `tf_module_class` VALUES (3, '首页顶部banner', 'banner', 2001, 1, 1499310182, 1499310326);
INSERT INTO `tf_module_class` VALUES (4, '内页banner', 'banner', 2002, 1, 1499310261, 1499310326);

-- ----------------------------
-- Table structure for tf_token_api
-- ----------------------------
DROP TABLE IF EXISTS `tf_token_api`;
CREATE TABLE `tf_token_api`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '接口名称',
  `module` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '模块',
  `controller` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '控制器',
  `method` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '方法',
  `param` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '参数',
  `is_user_token` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否验证用户token',
  `is_api_token` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否验证接口token',
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'GET' COMMENT '请求方式',
  `token` char(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '接口令牌',
  `document` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '接口文档',
  `remark` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '接口备注',
  `sorts` int(11) NOT NULL DEFAULT 50 COMMENT '排序',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '状态：为1正常，为0禁用',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_token_api
-- ----------------------------
INSERT INTO `tf_token_api` VALUES (1, '友情链接列表', 'api', 'Flink', 'index', '', 0, 0, 'GET', '0ab50bda0a40bf078a415deab654eb19', '{\"url\":\"/api/flink\"}', '?orderBy[]=id,desc&amp;page=1&amp;pageSize=2\n&amp;addon=moduleClass 【关联模块分类表】\n\n当前接口未开启任何token验证，可直接使用', 1, 1, 1505660032, 1509245191);
INSERT INTO `tf_token_api` VALUES (2, '友情链接单条查询', 'api', 'Flink', 'index', 'id', 1, 0, 'GET', '3708626bc9c864bc88465f4ffe79919c', '{\"url\":\"/api/flink/1\"}', '&amp;addon=moduleClass 【关联模块分类表】\n\n当前接口开启用户token，仅开启ID为1的admin用户token【61e5146e54db6be2d7174530417ea40b】\n?token_uid=1&amp;token_user=61e5146e54db6be2d7174530417ea40b', 2, 1, 1505660082, 1509244598);
INSERT INTO `tf_token_api` VALUES (3, '友情链接新增', 'api', 'Flink', 'index', '', 0, 1, 'POST', '4aefb101ea274fda9a62e234b56714df', '{\"url\":\"/api/flink\",\"data\":[{\"key\":\"mid\",\"value\":\"1\",\"type\":\"text\",\"enabled\":true},{\"key\":\"webname\",\"value\":\"\",\"type\":\"text\",\"enabled\":true},{\"key\":\"url\",\"value\":\"\",\"type\":\"text\",\"enabled\":false},{\"key\":\"info\",\"value\":\"\",\"type\":\"text\",\"enabled\":false},{\"key\":\"email\",\"value\":\"\",\"type\":\"text\",\"enabled\":false},{\"key\":\"logo\",\"value\":\"\",\"type\":\"text\",\"enabled\":false},{\"key\":\"sorts\",\"value\":\"50\",\"type\":\"text\",\"enabled\":true},{\"key\":\"status\",\"value\":\"1\",\"type\":\"text\",\"enabled\":true}]}', '当前接口开启接口token验证\n?token_api=4aefb101ea274fda9a62e234b56714df【接口令牌token】', 3, 1, 1507274504, 1509171720);
INSERT INTO `tf_token_api` VALUES (4, '友情链接编辑', 'api', 'Flink', 'index', 'id', 1, 1, 'PUT', '656e9258bbcdebf31271317681e9a3a0', '{\"url\":\"/api/flink/1\",\"data\":[{\"key\":\"mid\",\"value\":\"1\",\"type\":\"text\",\"enabled\":true},{\"key\":\"webname\",\"value\":\"\",\"type\":\"text\",\"enabled\":true},{\"key\":\"url\",\"value\":\"\",\"type\":\"text\",\"enabled\":false},{\"key\":\"info\",\"value\":\"\",\"type\":\"text\",\"enabled\":false},{\"key\":\"email\",\"value\":\"\",\"type\":\"text\",\"enabled\":false},{\"key\":\"logo\",\"value\":\"\",\"type\":\"text\",\"enabled\":false},{\"key\":\"sorts\",\"value\":\"50\",\"type\":\"text\",\"enabled\":true},{\"key\":\"status\",\"value\":\"1\",\"type\":\"text\",\"enabled\":true}]}', '当前接口开启用户token和接口token验证，仅开启ID为1的admin用户token【61e5146e54db6be2d7174530417ea40b】\n&amp;token_uid=1&amp;token_user=61e5146e54db6be2d7174530417ea40b\n&amp;token_api=656e9258bbcdebf31271317681e9a3a0【接口令牌token】', 4, 1, 1507274570, 1509244689);
INSERT INTO `tf_token_api` VALUES (5, '友情链接删除', 'api', 'Flink', 'index', 'id', 0, 0, 'DELETE', '6fdb7f3a2ea04eb4ca746e64ecd96161', '{\"url\":\"/api/flink/6\"}', '删除需要数据库成功删除才会返回200\n\n当前接口未开启任何token验证，可直接使用', 5, 0, 1507278825, 1509169242);
INSERT INTO `tf_token_api` VALUES (6, '友情链接自定义', 'api', 'Flink', 'demo', '', 0, 0, 'GET', '75726358b96d9ca2b6c760bb01a4df09', '{\"url\":\"/api/flink/demo\"}', '1', 6, 1, 1509163375, 1509163924);

-- ----------------------------
-- Table structure for tf_token_user
-- ----------------------------
DROP TABLE IF EXISTS `tf_token_user`;
CREATE TABLE `tf_token_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '类型【1、PC，2、移动端】',
  `token` char(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'token令牌',
  `token_time` int(10) NULL DEFAULT NULL COMMENT 'token令牌时限【PC登陆超时】',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_token_user
-- ----------------------------
INSERT INTO `tf_token_user` VALUES (9, 1, 2, '61e5146e54db6be2d7174530417ea40b', 0, 1505556248, 1505556248);
INSERT INTO `tf_token_user` VALUES (10, 1, 1, '5a8b9f348d4a454f5a0a8fcf3d5b97e0', 1524367148, 1505569684, 1505569684);

-- ----------------------------
-- Table structure for tf_user_info
-- ----------------------------
DROP TABLE IF EXISTS `tf_user_info`;
CREATE TABLE `tf_user_info`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `avatar` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '头像',
  `qq` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'QQ',
  `birthday` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '生日',
  `info` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '用户信息',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `uid`(`uid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tf_user_info
-- ----------------------------
INSERT INTO `tf_user_info` VALUES (1, 1, '/uploads/avatar/20170815/20170815162719_522753.jpg', '654108442', '544204800', '&lt;p&gt;\n	hi\n&lt;/p&gt;', 1502781914, 1502781914);
INSERT INTO `tf_user_info` VALUES (2, 2, '/uploads/avatar/20170815/20170815163031_249551.jpg', '', '', '', 1502782875, 1502782875);
INSERT INTO `tf_user_info` VALUES (3, 3, '/uploads/avatar/20170815/20170815163042_582354.jpg', '', '', '', 1502785283, 1502785283);
INSERT INTO `tf_user_info` VALUES (4, 4, '/uploads/avatar/20170815/20170815163103_675106.jpg', '', '', '', 1502785316, 1502785316);
INSERT INTO `tf_user_info` VALUES (5, 5, '/uploads/avatar/20170815/20170815162951_787194.jpg', '', '', '', 1502785706, 1502785706);

SET FOREIGN_KEY_CHECKS = 1;
