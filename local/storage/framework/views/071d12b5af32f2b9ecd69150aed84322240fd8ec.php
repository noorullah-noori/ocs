<?php echo '<'.'?'.'xml version="1.0" encoding="UTF-8" ?>'; ?>

<feed xmlns="http://www.w3.org/2005/Atom"<?php foreach($namespaces as $n) echo " ".$n; ?>>
    <title type="text"><?php echo $channel['title']; ?></title>
    <subtitle type="html"><![CDATA[<?php echo $channel['description']; ?>]]></subtitle>
    <link href="<?php echo e($channel['rssLink']); ?>"></link>
    <id><?php echo e($channel['link']); ?></id>
    <link rel="alternate" type="text/html" href="<?php echo e($channel['rssLink']); ?>" ></link>
    <link rel="<?php echo e($channel['ref']); ?>" type="application/atom+xml" href="<?php echo e($channel['link']); ?>" ></link>
<?php if(!empty($channel['logo'])): ?>
    <logo><?php echo e($channel['logo']); ?></logo>
<?php endif; ?>
<?php if(!empty($channel['icon'])): ?>
    <icon><?php echo e($channel['icon']); ?></icon>
<?php endif; ?>
        <updated><?php echo e($channel['pubdate']); ?></updated>
<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <entry>
            
            <title type="text"><![CDATA[<?php echo $item['title']; ?>]]></title>
            <link rel="alternate" type="text/html" href="<?php echo e($item['link']); ?>"></link>
            <id><?php echo e($item['link']); ?></id>
            <summary type="html"><![CDATA[<?php echo $item['description']; ?>]]></summary>
            <content type="html"><![CDATA[<?php echo $item['content']; ?>]]></content>
            <updated><?php echo e($item['pubdate']); ?></updated>
        </entry>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</feed>
