<?php

// ja.php - Japanese strings and titles
// ------------------------------------------------------------------------
// Copyright (c) 2001 - 2004 The phpBugTracker Group
// ------------------------------------------------------------------------
// This file is part of phpBugTracker
//
// phpBugTracker is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// phpBugTracker is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with phpBugTracker; if not, write to the Free Software Foundation,
// Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
// ------------------------------------------------------------------------
// $Id: ja.php,v 1.4 2007/09/18 05:53:07 brycen Exp $

$STRING = array(
	"That attachment does not exist" => "添付が存在しません。",
	"Please specify a file to upload" => "アップロードするファイルを指定してください。",
	"The file you specified is larger than %s bytes" => "ファイルを %s バイト以上で指定しました。",
	"The file you specified is larger than %d bytes" => "ファイルを %d バイト以上で指定しました。",
	"That bug does not exist" => "不都合が存在しませんでした。",
	"That attachment already exists for this bug" => "その添付はこのバグには既に存在します",
	"Couldn't find where to save the file!" => "どこにファイルを保存するべきか分かりませんでした!",
	"Couldn't create a file in the save path" => "保存パスにファイルを作成できませんでした。",
	"There was an error moving the uploaded file" => "アップロードされたファイルの移動中のエラーです。",
	"Add Attachment" => "添付追加",
	"You do not have the permissions required for that function" => "その機能に必要なパーミッションを持っていません。",
	"Bug Votes" => "Bug Votes",
	"You have already voted for this bug" => "あなたはこの不都合に既に投票しています",
	"You have reached the maximum number of votes per user" => "You have reached the maximum number of votes per user",
	"There is no history for this bug" => "この不都合は履歴がありませんでした。",
	"Bug History" => "不都合履歴",
	"You can not change this bug" => "あなたはこの不都合は変更できませんでした。",
	"Someone has updated this bug since you viewed it. The bug info has been reloaded with the latest changes." => "Someone has updated this bug since you viewed it. The bug info has been reloaded with the latest changes.",
	"That user does not exist" => "ユーザーが存在しませんでした。",
	"That bug dependency has already been added" => "不都合の依存は既に追加されています",
	"Please enter a summary" => "要約を入力してください。",
	"Please enter a description" => "説明を入力してください。",
	"Create Bug" => "不都合作成",
	"View Bug" => "不都合閲覧",
	"No projects found" => "プロジェクトが見つかりませんでした。",
	"Select Project" => "プロジェクト選択",
	"Invalid login" => "無効なログイン",
	"phpBugTracker Login" => "phpBugTracker ログイン",
	"Your phpBugTracker password is %s" => "あなたの phpBugTracker パスワードは %s です。",
	"Your password has been emailed to you" => "パスワードをメールで送りました。",
	"No bugs found" => "不都合が見つかりませんでした。",
	"Bug Summary" => "不都合の要約",
	"Project" => "プロジェクト",
	"Open" => "開く",
	"Total" => "合計",
	"Home" => "ホーム",
	"Please enter the host name for your database server" => "データベースサーバーのホスト名を入力してください。",
	"Please enter the name of the database you will be using" => "使用するデータベースの名前を入力してください。",
	"Please enter the user name for connecting to the database" => "データベースに接続するためのユーザー名を入力してください。",
	"Please enter the phpBT email address" => "phpBT 電子メールアドレスを入力してください。",
	"Please enter the admin login" => "管理ログインを入力してください。",
	"Please use a valid email address for the admin login" => "管理者ログインに使用する有効な電子メールアドレスを入力してください。",
	"Please enter the admin password" => "管理者のパスワードを入力してください。",
	"Please confirm the admin password" => "管理者の確認パスワードを入力してください。",
	"The admin passwords don't match" => "The admin passwords don't match",
	"Error writing to config.php" => "config.php に書き込み中のエラーです。",
	"Please enter a login" => "ログイン名を入力してください。",
	"Please enter a valid email" => "有効な電子メールアドレスを入力してください。",
	"That login has already been used" => "That login has already been used",
	"New account created" => "新規アカウントを作成しました。",
	"Create new account" => "新規アカウント作成",
	"Query Bugs" => "不都合照会",
	"Bug List" => "不都合一覧",
	"Assigned To" => "担当者",
	"Reporting" => "報告者",
	"Bug Counts by Date" => "不都合を日付で数える",
	"Your bug list column preferences have been saved" => "Your bug list column preferences have been saved",
	"Please enter a password" => "パスワードを入力してください。",
	"Those passwords don't match -- please try again" => "パスワードが一致しません -- もう一度試してください。",
	"Password changed" => "パスワードを変更しました。",
	"Changes Saved" => "変更を保存しました。",
	"Preferences changed" => "設定を変更しました。",
	"Receive notifications of bug changes via email" => "不都合の変更の通知をを電子メールアドレスで受け取る",
	"Show saved queries on the homepage" => "Show saved queries on the homepage",
	"User preferences" => "ユーザー設定",
	"Configuration" => "設定",
	"Please enter a name" => "名前を入力してください。",
	"Edit Database" => "データベース編集",
	"Database List" => "データベース一覧",
	"Edit Group" => "グループ編集",
	"Group List" => "グループ一覧",
	"Edit Operating System" => "オペレーションシステム編集",
	"Operating System List" => "オペレーションシステム一覧",
	"Please enter a version" => "バージョンを入力してください。",
	"Edit Version" => "バージョン編集",
	"Edit Component" => "コンポーネント編集",
	"You cannot choose specific groups when \"All Groups\" is chosen" => "You cannot choose specific groups when \"All Groups\" is chosen",
	"Edit Project" => "プロジェクト編集",
	"Project List" => "プロジェクト一覧",
	"Edit Resolution" => "分析編集",
	"Resolution List" => "分析一覧",
	"Edit Severity" => "重要度編集",
	"Severity List" => "重要度一覧",
	"Edit Site" => "サイト編集",
	"Site List" => "サイト一覧",
	"Edit Status" => "状態編集",
	"Status List" => "状態一覧",
	"Please enter an email" => "電子メールを入力して下さい",
	"Edit User" => "ユーザー編集",
	"User List" => "ユーザー一覧",
	"Name" => "名前",
	"Description" => "説明",
	"Owner" => "所有者",
	"None" => "なし",
	"Active" => "アクティブ",
	"Submit" => "送信",
	"Add new project" => "新規プロジェクトの追加",
	"Created Date" => "作成日",
	"Yes" => "はい",
	"No" => "いいえ",
	"Variable" => "変数",
	"Value" => "値",
	"Information" => "情報",
	"description" => "説明",
	"Sort Order" => "ソート順序",
	"Database list" => "データベース一覧",
	"Add new database" => "新規データベースの追加",
	"Are you sure you want to delete this item?" => "この項目を本当に削除しますか?",
	"Delete" => "削除",
	"Add new group" => "新規グループの追加",
	"Users" => "ユーザー一覧",
	"Locked" => "Locked",
	"This will remove all user assignments to this group and the group itself. Continue?" => "This will remove all user assignments to this group and the group itself. Continue?",
	"This will remove all user assignments to this group.  Continue?" => "This will remove all user assignments to this group.  Continue?",
	"Purge" => "Purge",
	"Assignable" => "Assignable",
	"Find Bug" => "不都合検索",
	"Projects" => "プロジェクト一覧",
	"Groups" => "グループ一覧",
	"Documentation" => "ドキュメント",
	"User Tools" => "ユーザーツール",
	"Statuses" => "状態一覧",
	"Resolutions" => "分析一覧",
	"Severities" => "重要度一覧",
	"Operating Systems" => "オペレーションシステム",
	"Databases" => "データベース一覧",
	"Sites" => "サイト一覧",
	"Regex" => "正規表現",
	"Add new operating system" => "新規オペレーションシステムの追加",
	"Are you sure you want to delete this OS" => "この OS を本当に削除しますか",
	"Items with a Sort Order = 0 will not be selectable by users." => "Items with a Sort Order = 0 will not be selectable by users.",
	"Only those items that have no bugs referencing them can be deleted." => "Only those items that have no bugs referencing them can be deleted.",
	"Project Information" => "プロジェクト情報",
	"Version Information" => "バージョン情報",
	"Initial Version" => "初期バージョン",
	"Component Information" => "コンポーネント情報",
	"Initial Component Name" => "初期コンポーネント名",
	"Only users in the following groups can see this project" => "次のグループ中のユーザだけがこのプロジェクトを見ることができます。",
	"These developers can administer this project" => "これらの開発者はこのプロジェクトを管理することができます。",
	"Versions" => "バージョン一覧",
	"Add new version" => "新規バージョンの追加",
	"Version" => "バージョン",
	"Created" => "作成日時",
	"No versions found" => "バージョンが見つかりませんでした。",
	"Components" => "コンポーネント一覧",
	"Add new component" => "新規コンポーネントの追加",
	"Component" => "コンポーネント",
	"No components found" => "コンポーネントが見つかりませんでした。",
	"Add new resolution" => "新規分析の追加",
	"Are you sure you want to delete this resolution?" => "本当にこの分析を削除しますか?",
	"Row Color" => "行の色",
	"Add new severity" => "新規重要度の追加",
	"Are you sure you want to delete this severity?" => "この重要度を本当に削除しますか?",
	"Add new site" => "新規サイトの追加",
	"Open/Closed" => "Open/Closed",
	"Closed" => "Closed",
	"Add new status" => "新規状態の追加",
	"Login" => "ログイン",
	"Email" => "電子メール",
	"First Name" => "名前",
	"Last Name" => "苗字",
	"Password" => "パスワード",
	"User Groups" => "グループユーザー",
	"Email Notify" => "電子メール通知",
	"Add new user" => "新規ユーザーの追加",
	"Filter" => "フィルター",
	"Bug" => "不都合",
	"Reporter" => "報告者",
	"Assigned to" => "割り当て",
	"Status" => "状態",
	"Resolution" => "分析",
	"Severity" => "重要度",
	"Priority" => "優先度",
	"Operating System" => "オペレーションシステム",
	"Summary" => "要約",
	"URL" => "URL",
	"Depends on bugs" => "依存する不都合",
	"Blocks bugs" => "不都合の阻害",
	"Comments" => "コメント",
	"Posted by" => "投稿者",
	"Back to bug" => "不都合に戻る",
	"You must login to modify this bug" => "この不都合の修正にはログインをしなければなりません。",
	"Return to bug list" => "不都合一覧に戻る",
	"Previous bug" => "前の不都合",
	"Next bug" => "次の不都合",
	"To be closed in version" => "To be closed in version",
	"Choose one" => "一つ選択",
	"Database" => "データベース",
	"Closed in version" => "Closed in version",
	"Site" => "サイト",
	"Add CC" => "CC 追加",
	"Add dependency" => "依存性の追加",
	"Remove dependency" => "依存性を削除",
	"Remove selected CCs" => "選択された CC を削除",
	"Additional comments" => "コメント追加",
	"Supress notification email" => "通知メールを抑制する",
	"Attachments" => "添付",
	"Create new attachment" => "新規添付の作成",
	"Size" => "容量",
	"Type" => "種類",
	"Are you sure you want to delete this attachment?" => "本当にこの添付を削除しますか?",
	"No attachments found for this bug" => "この不都合に添付が見つかりません。",
	"Vote for this bug" => "この不都合に投票する",
	"View votes" => "投票を閲覧",
	"View bug history" => "不都合履歴を閲覧",
	"Date" => "日付",
	"Who" => "Who",
	"What" => "What",
	"Old Value" => "旧値",
	"New Value" => "新値",
	"When" => "When",
	"No history found for this bug" => "この不都合は履歴が見つかりませんでした。",
	"Download to spreadsheet" => "スプレッドシートのダウンロード",
	"No votes found for this bug" => "この不都合は投票が見つかりませんでした。",
	"Back" => "戻る",
	"Most recently submitted bugs" => "もっとも最近の登録された 5 つの不都合",
	"Most recently closed bugs" => "もっとも最近の閉じられた 5 つの不都合",
	"Saved Queries" => "照会保存",
	"The image path is not writeable" => "画像パスが書き込み出来ませんでした。",
	"Quick Stats" => "簡易状況",
	"# bugs" => "# 不都合数",
	"phpBugTracker Installation" => "phpBugTracker インストール",
	"DB Test Failure" => "DB テストに失敗",
	"The installation script could not connect to the database <b>%s</b> on the host <b>%s</b> using the specified username and password.<br>Please check these details are correct and that the database already exists then retry." => "インストールスクリプトは指定のユーザー名とパスワードでデータベース接続することができませんでした。<br>これらの詳細が正確で、デーベースが既に存在することを確認してから再度試してください。",
	"DB Test Success" => "DB テストに成功",
	"The installation script successfully connected to the database <b>%s</b> on the host <b>%s</b> using the specified username and password.<br>Congratulations!" => "インストールスクリプトは指定のユーザー名とパスワードでデータベース接続することに成功しました(データベース:<b>%s</b> ホスト:<b>%s</b>)<br>おめでとうございます!",
	"Close window" => "ウィンドウを閉じる",
	"Database Options" => "データベースオプション",
	"Database Name" => "データベース名",
	"This database must already exist" => "データベースは既に存在していなければなりません。",
	"User" => "ユーザー",
	"Table Prefix" => "テーブル接頭語",
	"Test Database Connection" => "テストデータベース接続",
	"phpBT Email" => "phpBT 電子メール",
	"The email address used for sending bug updates, etc." => "不都合更新の送信などに電子メールアドレスを使用します。",
	"Admin Login" => "管理者ログイン",
	"Must be a valid email address" => "有効な電子メールアドレスでなければなりません。",
	"Admin Password" => "管理者パスワード",
	"Confirm Password" => "パスワード確認",
	"Encrypt Passwords in DB" => "DB 中の暗号化パスワード",
	"When you submit the form, the database tables will be created and config.php will be saved to disk.  You will then be able to login and use the bug tracker." => "When you submit the form, the database tables will be created and config.php will be saved to disk.  You will then be able to login and use the bug tracker.",
	"Since config.php is not writeable by this script, when you submit this form 
you will be prompted to save config.php.  Copy this file to 
the location of the bug tracker, and then you will be able to 
<a href=\index.php\>login to the bug tracker</a>.  From the 
home page you can go to the Admin Tools and customize your 
installation via the Configuration link.  Once you have 
completed the configuration, you will be ready to add a project and 
start reporting bugs!" => "Since config.php is not writeable by this script, when you submit this form 
you will be prompted to save config.php.  Copy this file to 
the location of the bug tracker, and then you will be able to 
<a href=\index.php\>login to the bug tracker</a>.  From the 
home page you can go to the Admin Tools and customize your 
installation via the Configuration link.  Once you have 
completed the configuration, you will be ready to add a project and 
start reporting bugs!",
	"Save Options" => "オプション保存",
	"User Login" => "ユーザーログイン",
	"Invalid login and/or password" => "ログイン名かパスワードが無効です。",
	"Your password has been mailed to you" => "パスワードをメールで送信しました。",
	"Email my password" => "自分のパスワードをメール送信する",
	"Open a new account" => "新規アカウント作成",
	"You have been logged out" => "ログアウトしました。",
	"Return to phpBugTracker home" => "phpBugTracker ホームに戻る",
	"Sorry, but the self-creation of new accounts has been disabled.  Please contact the administrator to have an account created for you." => "Sorry, but the self-creation of new accounts has been disabled.  Please contact the administrator to have an account created for you.",
	"Create a new account" => "新規アカウント作成",
	"optional" => "オプション",
	"Thanks for creating an account.  Check your email for your password." => "アカウント作成ありがとうございます。電子メールでパスワードを確認してください。",
	"First, you must pick a product on which to enter a bug." => "はじめに不都合報告をする製品を選択しなければなりません。",
	"All" => "All",
	"Sort by" => "ソート基準",
	"Bug number" => "不都合番号",
	"Ascending" => "Ascending",
	"Descending" => "Descending",
	"Save this query as" => "名前を付けてこの照会を保存する",
	"Reset to default query" => "照会のデフォルトに戻す",
	"Are you sure you want to delete this saved query?" => "この保存した照会を本当に削除しますか?",
	"Go to the advanced query page" => "高度な照会ページに移動する",
	"Reported on Site" => "Reported on Site",
	"matching as" => "一致",
	"regexp" => "正規表現",
	"not regexp" => "非正規表現",
	"substring" => "substring",
	"exact" => "exact",
	"A description entry" => "説明を入力",
	"Created Date Range" => "作成された期間",
	"to" => "から",
	"Closed in Version" => "Closed in Version",
	"To be Closed in Version" => "To be Closed in Version",
	"Sort By" => "ソート基準",
	"Go to the simple query page" => "簡易照会ページに移動する",
	"Show bug statistics for the selected project" => "選択されたプロジェクトの不都合統計を表示する",
	"All projects" => "すべてのプロジェクト",
	"Go" => "Go",
	"Bug Resolutions" => "不都合分析",
	"Unassigned" => "未アサイン",
	"Upgade phpBugTracker" => "phpBugTracker をアップグレードする",
	"Your database has been updated." => "データベースを更新しました。",
	"phpBugTracker home" => "phpBugTracker ホーム",
	"This script will upgrade your database from version %s to version %s of phpBugTracker." => "このスクリプトは phpBugTracker のバージョン %s からバージョン %s までデータベースをアップグレードするでしょう。",
	"Do it!" => "Do it!",
	"Change Password" => "パスワード変更",
	"Enter new password" => "新規パスワード入力",
	"Verify password" => "パスワード確認",
	"Change Preferences" => "設定変更",
	"Number of results per page" => "ページ毎の結果数",
	"Bug List Columns" => "バグ一覧カラム",
	"Choose the fields you want to see in the bug list" => "不都合一覧で見たいフィールドを選びます。",
	"Votes" => "投票",
	"Are you sure you want to delete this vote?" => "この投票を本当に削除しますか?",
	"Add a new bug" => "新規不都合の追加",
	"View Reports" => "報告を閲覧",
	"Create a New Account" => "新規アカウント作成",
	"Read Documentation" => "ドキュメントを読む",
	"Administration Tools" => "管理ツール",
	"Email Password" => "電子メールパスワード",
	"Forgot your password?  Have it sent to you" => "パスワードを忘れましたか? メールで送信します。",
	"Remember %s for next time" => "次回から %s にリマインダー",
	"Remember me" => "自分にリマインダー",
	"Bugs assigned to me" => "不都合を自分に割り当て",
	"Bugs reported by me" => "報告者を自分に割り当て",
	"Personal Page" => "個人ページ",
	"Logout %s" => "%s ログアウト",
	"You do not have the rights to view this project." => "このプロジェクトを見る権限がありません。",
	"Unable to load JPGraph" => "JPGraph を読み込めません。",
	"Unable to load JPGraph pie class" => "クラス JPGraph pie を読み込めません。",
	"There was a problem when trying to use the JPGraph library. Please fix or disable by setting 'USE_JPGRAPH' to 'NO' on the Configuration page of the Administration Tools." => "JpGraph ライブラリの使用に問題があります。Please fix or disable by setting 'USE_JPGRAPH' to 'NO' on the Configuration page of the Administration Tools.",
	);

?>
